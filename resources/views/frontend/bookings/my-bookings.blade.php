@extends('frontend.layouts.app')

@section('title', 'My Bookings | Cab-Chalak')

@section('content')

<section class="my-bookings-page">

    <div class="my-bookings-container">

        <div class="my-bookings-header">
            <div>
                <span class="my-bookings-eyebrow">
                    CAB-CHALAK
                </span>

                <h1>My Bookings</h1>

                <p>
                    Check your booking details and current booking status.
                </p>
            </div>
        </div>


        {{-- Search Booking --}}
        <div class="my-bookings-search-card">

            <form method="GET" action="{{ route('booking.my') }}">

                <div class="my-bookings-search-grid">

                    <div class="my-booking-input-group">

                        <label for="booking_reference">
                            Booking Reference
                        </label>

                        <input
                            type="text"
                            id="booking_reference"
                            name="booking_reference"
                            value="{{ request('booking_reference') }}"
                            placeholder="Example: CC-261004-ABC123"
                        >

                    </div>


                    <div class="my-booking-input-group">

                        <label for="mobile">
                            Mobile Number
                        </label>

                        <input
                            type="text"
                            id="mobile"
                            name="mobile"
                            value="{{ request('mobile') }}"
                            placeholder="Enter mobile number"
                        >

                    </div>


                    <div class="my-booking-search-action">

                        <button type="submit">
                            Search Booking
                        </button>

                    </div>

                </div>

            </form>

        </div>


        {{-- Success Message --}}
        @if(session('success'))

            <div class="booking-alert booking-alert-success">
                {{ session('success') }}
            </div>

        @endif


        {{-- Error Message --}}
        @if(session('error'))

            <div class="booking-alert booking-alert-error">
                {{ session('error') }}
            </div>

        @endif


        {{-- Validation Errors --}}
        @if($errors->any())

            <div class="booking-alert booking-alert-error">

                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach

            </div>

        @endif


        {{-- Booking Results --}}
        @if(request()->hasAny(['mobile', 'booking_reference']))

            @if($bookings->count())

                <div class="my-bookings-results">

                    <div class="results-heading">

                        <h2>
                            Your Bookings
                        </h2>

                        <span>
                            {{ $bookings->count() }}
                            {{ $bookings->count() == 1 ? 'Booking' : 'Bookings' }}
                        </span>

                    </div>


                    @foreach($bookings as $booking)

                        <div class="booking-card">

                            <div class="booking-card-top">

                                <div>

                                    <span class="booking-reference-label">
                                        Booking Reference
                                    </span>

                                    <h3>
                                        {{ $booking->booking_reference }}
                                    </h3>

                                </div>


                                <div class="booking-status
                                    booking-status-{{ $booking->booking_status }}">

                                    {{ ucfirst($booking->booking_status) }}

                                </div>

                            </div>


                            <div class="booking-card-grid">

                                <div class="booking-info-item">

                                    <span>Cab</span>

                                    <strong>
                                        {{ $booking->cab->name ?? 'Cab' }}
                                    </strong>

                                </div>


                                <div class="booking-info-item">

                                    <span>Trip Type</span>

                                    <strong>
                                        {{ $booking->trip_type === 'round_trip'
                                            ? 'Round Trip'
                                            : 'One Way' }}
                                    </strong>

                                </div>


                                <div class="booking-info-item">

                                    <span>Travel Date</span>

                                    <strong>
                                        {{ optional($booking->travel_date)->format('d M Y') }}
                                    </strong>

                                </div>


                                @if($booking->return_date)

                                    <div class="booking-info-item">

                                        <span>Return Date</span>

                                        <strong>
                                            {{ optional($booking->return_date)->format('d M Y') }}
                                        </strong>

                                    </div>

                                @endif


                                <div class="booking-info-item">

                                    <span>Passengers</span>

                                    <strong>
                                        {{ $booking->passenger_count }}
                                    </strong>

                                </div>


                                <div class="booking-info-item">

                                    <span>Total Fare</span>

                                    <strong>
                                        ₹{{ number_format($booking->total_fare) }}
                                    </strong>

                                </div>


                                <div class="booking-info-item">

                                    <span>Payment</span>

                                    <strong>
                                        {{ ucfirst($booking->payment_status) }}
                                    </strong>

                                </div>


                                <div class="booking-info-item">

                                    <span>Booking Status</span>

                                    <strong>
                                        {{ ucfirst($booking->booking_status) }}
                                    </strong>

                                </div>

                            </div>


                            <div class="booking-route">

                                <div>
                                    <span>Pickup</span>
                                    <strong>
                                        {{ $booking->pickup_location }}
                                    </strong>
                                </div>

                                <div class="route-arrow">
                                    →
                                </div>

                                <div>
                                    <span>Drop</span>
                                    <strong>
                                        {{ $booking->drop_location }}
                                    </strong>
                                </div>

                            </div>


                            <div class="booking-card-actions">

                                <a
                                    href="{{ route('booking.track', [
                                        'booking_reference' =>
                                            $booking->booking_reference
                                    ]) }}"
                                    class="booking-track-btn"
                                >
                                    Track Booking
                                </a>


                                @if(
                                    $booking->booking_status !== 'cancelled'
                                    &&
                                    $booking->booking_status !== 'completed'
                                )

                                    <form
                                        method="POST"
                                        action="{{ route('booking.cancel', $booking) }}"
                                        onsubmit="return confirm('Are you sure you want to cancel this booking?');"
                                    >

                                        @csrf

                                        <button
                                            type="submit"
                                            class="booking-cancel-btn"
                                        >
                                            Cancel Booking
                                        </button>

                                    </form>

                                @endif

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="booking-empty-state">

                    <div class="booking-empty-icon">
                        📋
                    </div>

                    <h2>
                        No Booking Found
                    </h2>

                    <p>
                        We could not find any booking with the information
                        you entered.
                    </p>

                </div>

            @endif

        @else

            <div class="booking-empty-state">

                <div class="booking-empty-icon">
                    🚕
                </div>

                <h2>
                    Find Your Booking
                </h2>

                <p>
                    Enter your booking reference or mobile number above
                    to view your booking.
                </p>

            </div>

        @endif

    </div>

</section>

@endsection