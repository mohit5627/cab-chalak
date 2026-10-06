@extends('frontend.layouts.app')

@section('title', 'Passenger Details | Cab-Chalak')

@section('content')

<section class="cabs-page">

    <div class="cabs-page-header">
        <div class="container">
            <h1>Passenger Details</h1>
            <p>Enter your details to confirm your cab booking.</p>
        </div>
    </div>

    <div class="container">

        <div class="booking-form-layout">

            {{-- Passenger Form --}}
            <div class="booking-form-card">

                <div class="booking-section-title">
                    <h2>Passenger Information</h2>
                    <p>Please enter the passenger details below.</p>
                </div>

                <form
                    method="POST"
                    action="{{ route('booking.store') }}"
                >

                    @csrf

                    <input
                        type="hidden"
                        name="cab_id"
                        value="{{ $cab->id }}"
                    >

                    <input
                        type="hidden"
                        name="pickup_location"
                        value="{{ $pickup }}"
                    >

                    <input
                        type="hidden"
                        name="drop_location"
                        value="{{ $drop }}"
                    >

                    <input
                        type="hidden"
                        name="pickup_place_id"
                        value="{{ request('pickup_place_id') }}"
                    >

                    <input
                        type="hidden"
                        name="drop_place_id"
                        value="{{ request('drop_place_id') }}"
                    >

                    <input
                        type="hidden"
                        name="travel_date"
                        value="{{ $travelDate }}"
                    >

                     <input
                        type="hidden"
                        name="trip_type"
                        value="{{ $tripType }}"
                    >

                    <input
                        type="hidden"
                        name="return_date"
                        value="{{ $returnDate }}"
                    >

                    <input
                        type="hidden"
                        name="distance_km"
                        value="{{ $distance }}"
                    >

                    <input
                        type="hidden"
                        name="duration"
                        value="{{ $duration }}"
                    >


                    <div class="booking-form-grid">

                        <div class="booking-field">

                            <label>
                                Full Name <span>*</span>
                            </label>

                            <input
                                type="text"
                                name="passenger_name"
                                value="{{ old('passenger_name') }}"
                                placeholder="Enter your full name"
                                required
                            >

                        </div>


                        <div class="booking-field">

                            <label>
                                Mobile Number <span>*</span>
                            </label>

                            <input
                                type="tel"
                                name="passenger_mobile"
                                value="{{ old('passenger_mobile') }}"
                                placeholder="Enter mobile number"
                                maxlength="10"
                                required
                            >

                        </div>


                        <div class="booking-field">

                            <label>Email Address</label>

                            <input
                                type="email"
                                name="passenger_email"
                                value="{{ old('passenger_email') }}"
                                placeholder="Enter email address"
                            >

                        </div>


                        <div class="booking-field">

                            <label>
                                Number of Passengers <span>*</span>
                            </label>

                            <input
                                type="number"
                                name="passenger_count"
                                value="{{ old('passenger_count', 1) }}"
                                min="1"
                                max="{{ $cab->seats }}"
                                required
                            >

                        </div>

                    </div>


                    <div class="booking-field">

                        <label>Special Notes</label>

                        <textarea
                            name="customer_notes"
                            rows="4"
                            placeholder="Any special request or note..."
                        >{{ old('customer_notes') }}</textarea>

                    </div>


                    <button
                        type="submit"
                        class="cab-book-btn booking-submit-btn"
                    >
                        Confirm Booking
                    </button>

                </form>

            </div>


            {{-- Booking Summary --}}
            <aside class="booking-summary-card">

                <h3>Booking Summary</h3>

                <div class="booking-summary-cab">

                    <img
                        src="{{ $cab->image
                            ? asset('storage/' . $cab->image)
                            : asset('assets/images/route-jodhpur.png') }}"
                        alt="{{ $cab->name }}"
                    >

                    <div>
                        <strong>{{ $cab->name }}</strong>

                        <span>
                            {{ $cab->type }} ·
                            {{ $cab->seats }} Seats
                        </span>
                    </div>

                </div>


                <div class="booking-summary-row">
                    <span>Pickup</span>
                    <strong>{{ $pickup }}</strong>
                </div>

                <div class="booking-summary-row">
                    <span>Drop</span>
                    <strong>{{ $drop }}</strong>
                </div>

                <div class="booking-summary-row">
                    <span>Travel Date</span>
                    <strong>{{ $travelDate }}</strong>
                </div>
                <div class="booking-summary-row">
                    <span>Trip Type</span>

                    <strong>
                        {{ $tripType === 'round_trip' ? 'Round Trip' : 'One Way' }}
                    </strong>
                </div>

                @if($tripType === 'round_trip' && $returnDate)
                    <div class="booking-summary-row">
                        <span>Return Date</span>
                        <strong>{{ $returnDate }}</strong>
                    </div>
                @endif

                <div class="booking-summary-row">
                    <span>Distance</span>
                    <strong>{{ $distance }} km</strong>
                </div>

                <div class="booking-summary-row booking-total">
                    <span>Total Fare</span>

                    <strong>
                        ₹{{ number_format((float) $fare) }}
                    </strong>
                </div>

                <div class="booking-summary-payment">
                    <span>
                        Part Payment
                    </span>

                    <strong>
                        ₹{{ number_format((float) $partPayment) }}
                    </strong>
                </div>

            </aside>

        </div>

    </div>

</section>

@endsection