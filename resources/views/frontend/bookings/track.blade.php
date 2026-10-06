@extends('frontend.layouts.app')

@section('title', 'Track Booking | Cab-Chalak')

@section('content')

<section class="track-booking-page">

    <div class="track-booking-container">

        <div class="track-booking-header">

            <span class="track-booking-eyebrow">
                CAB-CHALAK
            </span>

            <h1>Track Your Booking</h1>

            <p>
                Enter your booking reference to check your latest booking status.
            </p>

        </div>


        <div class="track-search-card">

            <form method="GET" action="{{ route('booking.track') }}">

                <label for="track_booking_reference">
                    Booking Reference
                </label>

                <div class="track-search-row">

                    <input
                        type="text"
                        id="track_booking_reference"
                        name="booking_reference"
                        value="{{ request('booking_reference') }}"
                        placeholder="Example: CC-261004-ABC123"
                        required
                    >

                    <button type="submit">
                        Track Booking
                    </button>

                </div>

            </form>

        </div>


        @if(request()->filled('booking_reference'))

            @if($booking)

                <div class="track-result-card">

                    <div class="track-result-top">

                        <div>

                            <span>
                                Booking Reference
                            </span>

                            <h2>
                                {{ $booking->booking_reference }}
                            </h2>

                        </div>


                        <div class="booking-status
                            booking-status-{{ $booking->booking_status }}">

                            {{ ucfirst($booking->booking_status) }}

                        </div>

                    </div>


                    <div class="track-progress">

                        <div class="track-step
                            {{ in_array($booking->booking_status, ['pending', 'confirmed', 'completed']) ? 'active' : '' }}">

                            <div class="track-step-icon">
                                ✓
                            </div>

                            <strong>Booking Placed</strong>

                        </div>


                        <div class="track-line
                            {{ in_array($booking->booking_status, ['confirmed', 'completed']) ? 'active' : '' }}">
                        </div>


                        <div class="track-step
                            {{ in_array($booking->booking_status, ['confirmed', 'completed']) ? 'active' : '' }}">

                            <div class="track-step-icon">
                                ✓
                            </div>

                            <strong>Confirmed</strong>

                        </div>


                        <div class="track-line
                            {{ $booking->booking_status === 'completed' ? 'active' : '' }}">
                        </div>


                        <div class="track-step
                            {{ $booking->booking_status === 'completed' ? 'active' : '' }}">

                            <div class="track-step-icon">
                                ✓
                            </div>

                            <strong>Completed</strong>

                        </div>

                    </div>


                    @if($booking->booking_status === 'cancelled')

                        <div class="track-cancelled-message">

                            <strong>
                                Booking Cancelled
                            </strong>

                            <p>
                                This booking has been cancelled.
                            </p>

                        </div>

                    @endif


                    <div class="track-details-grid">

                        <div>
                            <span>Cab</span>
                            <strong>
                                {{ $booking->cab->name ?? 'Cab' }}
                            </strong>
                        </div>

                        <div>
                            <span>Trip Type</span>
                            <strong>
                                {{ $booking->trip_type === 'round_trip'
                                    ? 'Round Trip'
                                    : 'One Way' }}
                            </strong>
                        </div>

                        <div>
                            <span>Travel Date</span>
                            <strong>
                                {{ optional($booking->travel_date)->format('d M Y') }}
                            </strong>
                        </div>

                        @if($booking->return_date)

                            <div>
                                <span>Return Date</span>
                                <strong>
                                    {{ optional($booking->return_date)->format('d M Y') }}
                                </strong>
                            </div>

                        @endif

                        <div>
                            <span>Passenger</span>
                            <strong>
                                {{ $booking->passenger_name }}
                            </strong>
                        </div>

                        <div>
                            <span>Mobile</span>
                            <strong>
                                {{ $booking->passenger_mobile }}
                            </strong>
                        </div>

                        <div>
                            <span>Payment</span>
                            <strong>
                                {{ ucfirst($booking->payment_status) }}
                            </strong>
                        </div>

                        <div>
                            <span>Total Fare</span>
                            <strong>
                                ₹{{ number_format($booking->total_fare) }}
                            </strong>
                        </div>

                    </div>


                    <div class="track-route">

                        <div>

                            <span>Pickup</span>

                            <strong>
                                {{ $booking->pickup_location }}
                            </strong>

                        </div>

                        <div class="track-route-arrow">
                            →
                        </div>

                        <div>

                            <span>Drop</span>

                            <strong>
                                {{ $booking->drop_location }}
                            </strong>

                        </div>

                    </div>


                    @if(
                        $booking->booking_status !== 'cancelled'
                        &&
                        $booking->booking_status !== 'completed'
                    )

                        <form
                            method="POST"
                            action="{{ route('booking.cancel', $booking) }}"
                            class="track-cancel-form"
                            onsubmit="return confirm('Are you sure you want to cancel this booking?');"
                        >

                            @csrf

                            <button type="submit">
                                Cancel Booking
                            </button>

                        </form>

                    @endif

                </div>

            @else

                <div class="track-not-found">

                    <div>
                        🔎
                    </div>

                    <h2>
                        Booking Not Found
                    </h2>

                    <p>
                        We could not find a booking with this reference.
                        Please check the booking reference and try again.
                    </p>

                </div>

            @endif

        @else

            <div class="track-not-found">

                <div>
                    🚕
                </div>

                <h2>
                    Enter Your Booking Reference
                </h2>

                <p>
                    Your booking status will appear here.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection