<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Cab;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function create(Request $request, Cab $cab)
    {
        abort_unless($cab->is_active, 404);

        $pickup = $request->input('pickup');
        $drop = $request->input('drop');
        $travelDate = $request->input('date');

        $tripType = $request->input('trip_type', 'one_way');

        if (!in_array($tripType, ['one_way', 'round_trip'])) {
            $tripType = 'one_way';
        }

        $returnDate = $request->input('return_date');

        // Round trip ke liye return date required hai
        if ($tripType === 'round_trip') {

            if (!$returnDate) {
                $returnDate = $travelDate;
            }

            if ($travelDate && $returnDate < $travelDate) {
                abort(422, 'Return date cannot be before travel date.');
            }

        } else {
            $returnDate = null;
        }

        $distance = (float) $request->input('distance', 0);
        $duration = $request->input('duration');

        $minimumKm = (float) ($cab->minimum_km ?? 0);

        $rate = (float) ($cab->extra_km_rate ?? 0);

        if ($rate <= 0) {
            $rate = (float) ($cab->per_km_rate ?? 0);
        }

        // One Way Fare
        if ($distance > 0) {

            $distanceFare = max($distance - $minimumKm, 0) * $rate;

            $oneWayFare = (float) $cab->base_fare + $distanceFare;

        } else {

            $distanceFare = 0;

            $oneWayFare = (float) $cab->base_fare;
        }

        // Final Fare
        if ($tripType === 'round_trip') {

            if ((float) $cab->round_trip_fare > 0) {

                $fare = (float) $cab->round_trip_fare;

            } else {

                // Round trip fare not set:
                // use 2x one-way fare
                $fare = $oneWayFare * 2;
            }

        } else {

            $fare = $oneWayFare;
        }

        $fare = round($fare);

        $baseFare = (float) $cab->base_fare;

        $driverAllowance = 0;
        $tollCharges = 0;
        $parkingCharges = 0;

        $partPaymentPercent = (float) ($cab->part_payment_percent ?? 0);

        $partPayment = round(
            $fare * ($partPaymentPercent / 100)
        );

        $remainingAmount = $fare - $partPayment;

        return view('frontend.bookings.create', compact(
            'cab',
            'pickup',
            'drop',
            'travelDate',
            'returnDate',
            'tripType',
            'distance',
            'duration',
            'fare',
            'oneWayFare',
            'baseFare',
            'distanceFare',
            'driverAllowance',
            'tollCharges',
            'parkingCharges',
            'partPaymentPercent',
            'partPayment',
            'remainingAmount'
        ));
    }




    public function passengerDetails(Request $request, Cab $cab)
    {
        abort_unless($cab->is_active, 404);

        return view('frontend.bookings.passenger-details', [

            'cab' => $cab,

            'pickup' => $request->input('pickup'),

            'drop' => $request->input('drop'),

            'travelDate' => $request->input('date'),

            'returnDate' => $request->input('return_date'),

            'tripType' => $request->input('trip_type', 'one_way'),

            'distance' => $request->input('distance'),

            'duration' => $request->input('duration'),

            'fare' => $request->input('fare'),

            'partPayment' => $request->input('part_payment'),

            'remainingAmount' => $request->input('remaining'),
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([

            'cab_id' => [
                'required',
                'exists:cabs,id'
            ],

            'pickup_location' => [
                'required',
                'string',
                'max:255'
            ],

            'drop_location' => [
                'required',
                'string',
                'max:255'
            ],

            'pickup_place_id' => [
                'nullable',
                'string',
                'max:255'
            ],

            'drop_place_id' => [
                'nullable',
                'string',
                'max:255'
            ],

            'travel_date' => [
                'required',
                'date'
            ],

            'return_date' => [
                'nullable',
                'date',
                'after_or_equal:travel_date'
            ],

            'trip_type' => [
                'required',
                'in:one_way,round_trip'
            ],

            'distance_km' => [
                'nullable',
                'numeric',
                'min:0'
            ],

            'duration' => [
                'nullable',
                'string',
                'max:100'
            ],

            'passenger_name' => [
                'required',
                'string',
                'max:100'
            ],

            'passenger_mobile' => [
                'required',
                'string',
                'max:20'
            ],

            'passenger_email' => [
                'nullable',
                'email',
                'max:150'
            ],

            'passenger_count' => [
                'required',
                'integer',
                'min:1'
            ],

            'customer_notes' => [
                'nullable',
                'string',
                'max:1000'
            ],
        ]);


        $cab = Cab::where('id', $validated['cab_id'])
            ->where('is_active', true)
            ->firstOrFail();


        // Passenger count cab seats se zyada nahi honi chahiye
        if ($validated['passenger_count'] > $cab->seats) {

            return back()
                ->withInput()
                ->withErrors([
                    'passenger_count' =>
                        'Passenger count cannot exceed available seats.'
                ]);
        }


        $distance = (float) ($validated['distance_km'] ?? 0);

        $minimumKm = (float) ($cab->minimum_km ?? 0);

        $rate = (float) ($cab->extra_km_rate ?? 0);

        if ($rate <= 0) {
            $rate = (float) ($cab->per_km_rate ?? 0);
        }


        // One Way Calculation
        if ($distance > 0) {

            $distanceFare = max(
                $distance - $minimumKm,
                0
            ) * $rate;

            $oneWayFare =
                (float) $cab->base_fare
                + $distanceFare;

        } else {

            $distanceFare = 0;

            $oneWayFare =
                (float) $cab->base_fare;
        }


        // Final Fare
        if ($validated['trip_type'] === 'round_trip') {

            if ((float) $cab->round_trip_fare > 0) {

                $totalFare =
                    (float) $cab->round_trip_fare;

            } else {

                $totalFare =
                    $oneWayFare * 2;
            }

        } else {

            $totalFare = $oneWayFare;
        }


        $totalFare = round($totalFare);


        $partPaymentPercent =
            (float) ($cab->part_payment_percent ?? 0);


        $partPaymentAmount = round(
            $totalFare *
            ($partPaymentPercent / 100)
        );


        $remainingAmount =
            $totalFare -
            $partPaymentAmount;


        $booking = Booking::create([

            'booking_reference' =>
                'CC-' .
                now()->format('ymd') .
                '-' .
                strtoupper(Str::random(6)),


            'cab_id' => $cab->id,


            'pickup_location' =>
                $validated['pickup_location'],

            'drop_location' =>
                $validated['drop_location'],


            'pickup_place_id' =>
                $validated['pickup_place_id'] ?? null,

            'drop_place_id' =>
                $validated['drop_place_id'] ?? null,


            'travel_date' =>
                $validated['travel_date'],

            'return_date' =>
                $validated['return_date'] ?? null,


            'distance_km' =>
                $distance,

            'duration' =>
                $validated['duration'] ?? null,


            'passenger_name' =>
                $validated['passenger_name'],

            'passenger_mobile' =>
                $validated['passenger_mobile'],

            'passenger_email' =>
                $validated['passenger_email'] ?? null,

            'passenger_count' =>
                $validated['passenger_count'],


            'trip_type' =>
                $validated['trip_type'],


            'base_fare' =>
                $cab->base_fare,

            'distance_fare' =>
                $distanceFare,

            'driver_allowance' =>
                0,

            'toll_charges' =>
                0,

            'parking_charges' =>
                0,


            'total_fare' =>
                $totalFare,


            'part_payment_percent' =>
                $partPaymentPercent,

            'part_payment_amount' =>
                $partPaymentAmount,

            'remaining_amount' =>
                $remainingAmount,


            'payment_status' =>
                'pending',

            'booking_status' =>
                'pending',


            'customer_notes' =>
                $validated['customer_notes'] ?? null,
        ]);


        return view(
            'frontend.bookings.success',
            compact(
                'booking',
                'cab'
            )
        );
    }

    public function myBookings(Request $request)
    {
        $query = Booking::with('cab')
            ->orderBy('created_at', 'desc');

        if ($request->filled('mobile')) {
            $query->where('passenger_mobile', $request->input('mobile'));
        }

        if ($request->filled('booking_reference')) {
            $query->where(
                'booking_reference',
                $request->input('booking_reference')
            );
        }

        $bookings = collect();

        if (
            $request->filled('mobile') ||
            $request->filled('booking_reference')
        ) {
            $bookings = $query->get();
        }

        return view('frontend.bookings.my-bookings', compact('bookings'));
    }


    public function track(Request $request)
    {
        $booking = null;

        if ($request->filled('booking_reference')) {
            $booking = Booking::with('cab')
                ->where(
                    'booking_reference',
                    $request->input('booking_reference')
                )
                ->first();
        }

        return view('frontend.bookings.track', compact('booking'));
    }


    public function cancel(Request $request, Booking $booking)
    {
        if ($booking->booking_status === 'cancelled') {
            return back()->with('error', 'This booking is already cancelled.');
        }

        if ($booking->booking_status === 'completed') {
            return back()->with(
                'error',
                'Completed booking cannot be cancelled.'
            );
        }

        $booking->update([
            'booking_status' => 'cancelled',
            'payment_status' => 'refunded',
        ]);

        return back()->with(
            'success',
            'Your booking has been cancelled successfully.'
        );
    }
}