@extends('frontend.layouts.app')

@section('title', 'Book Cab | Cab-Chalak')

@section('content')

<section class="cabs-page">

    <div class="cabs-page-header">
        <div class="container">
            <h1>Book Your Cab</h1>
            <p>Review your journey details before continuing.</p>
        </div>
    </div>

    <div class="container">

        <div class="cab-card booking-cab-card">

            <div class="cab-image">

                <img
                    src="{{ $cab->image
                        ? asset('storage/' . $cab->image)
                        : asset('assets/images/route-jodhpur.png') }}"
                    alt="{{ $cab->name }}"
                >

            </div>

            <div class="cab-details">

                <h3>{{ $cab->name }}</h3>

                <div class="cab-meta">
                    <span>{{ $cab->type }}</span>
                    <b>{{ $cab->seats }} Seats</b>
                    <b>{{ $cab->luggage }} Luggage</b>

                    @if($cab->ac)
                        <b>AC</b>
                    @endif
                </div>



            
            <div class="cab-features">
                    <div>
                        <strong>Pickup</strong>
                        <p>{{ $pickup ?: 'Not selected' }}</p>
                    </div>

                    <div>
                        <strong>Drop</strong>
                        <p>{{ $drop ?: 'Not selected' }}</p>
                    </div>

                    <div>
                        <strong>Travel Date</strong>
                        <p>{{ $travelDate ?: 'Not selected' }}</p>
                    </div>

                    @if($tripType === 'round_trip' && $returnDate)
                        <div>
                            <strong>Return Date</strong>
                            <p>{{ $returnDate }}</p>
                        </div>
                    @endif

                    <div>
                        <strong>Distance</strong>
                        <p>
                            {{ $distance > 0 ? $distance . ' km' : 'N/A' }}
                        </p>
                    </div>

                    <div>
                        <strong>Travel Time</strong>
                        <p>{{ $duration ?: 'N/A' }}</p>
                    </div>

                </div>

            </div>

            <div class="cab-price booking-fare-box">
                <div
                    id="fareData"
                    data-one-way-fare="{{ $oneWayFare }}"
                    data-round-trip-fare="{{ $cab->round_trip_fare ?? 0 }}"
                    data-part-payment-percent="{{ $partPaymentPercent }}"
                    style="display:none;"
                ></div>

                <small>Fare Breakdown</small>

                <div class="fare-breakdown">

                    <div class="fare-row">
                        <span>Base Fare</span>
                        <strong id="baseFareAmount">
                            ₹{{ number_format($baseFare) }}
                        </strong>
                    </div>

                    <div class="fare-row">
                        <span>Distance Fare</span>
                        <strong id="distanceFareAmount">
                            ₹{{ number_format($distanceFare) }}
                        </strong>
                    </div>

                    <div class="fare-row">
                        <span>Driver Allowance</span>
                        <strong>
                            ₹{{ number_format($driverAllowance) }}
                        </strong>
                    </div>

                    <div class="fare-row">
                        <span>Toll Charges</span>
                        <strong>
                            ₹{{ number_format($tollCharges) }}
                        </strong>
                    </div>

                    <div class="fare-row">
                        <span>Parking Charges</span>
                        <strong>
                            ₹{{ number_format($parkingCharges) }}
                        </strong>
                    </div>

                </div>

                <div class="fare-total">

                    <span>Total Fare</span>

                    <strong id="totalFareAmount">
                        ₹{{ number_format($fare) }}
                    </strong>

                </div>

                <div class="fare-payment">

                    <div>
                        <span>Pay Now</span>

                        <strong id="partPaymentAmount">
                            ₹{{ number_format($partPayment) }}
                        </strong>

                        <small>
                            {{ rtrim(rtrim(number_format($partPaymentPercent, 2), '0'), '.') }}%
                        </small>
                    </div>

                    <div>
                        <span>Remaining</span>

                        <strong id="remainingAmount">
                            ₹{{ number_format($remainingAmount) }}
                        </strong>
                    </div>

                </div>

                <a
                id="continueBookingBtn"
                href="{{ route('booking.passenger', [
                    'cab' => $cab->id,
                    'pickup' => $pickup,
                    'drop' => $drop,
                    'date' => $travelDate,
                    'return_date' => $returnDate,
                    'trip_type' => $tripType,
                    'distance' => $distance,
                    'duration' => $duration,
                    'fare' => $fare,
                    'part_payment' => $partPayment,
                    'remaining' => $remainingAmount,
                ]) }}"
                class="cab-book-btn"
            >
                Continue
            </a>

            </div>

        </div>

    </div>

</section>

@endsection