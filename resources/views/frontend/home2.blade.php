@extends('frontend.layouts.app')

@section('title', 'Cab-Chalak | Book Reliable Cabs & Outstation Rides')

@section('content')

{{-- =========================================================
    HERO + BOOKING SEARCH
========================================================= --}}

<section class="cc2-hero">

    {{-- Background Image --}}
    <div class="cc2-hero-bg"></div>

    {{-- Dark Overlay --}}
    <div class="cc2-hero-overlay"></div>


    <div class="cc2-container cc2-hero-container">
        <div class="cc2-booking-card">

            {{-- Booking Tabs + Trust --}}

            <div class="cc2-booking-top">

                <div class="cc2-booking-tabs">

                    <button
                        type="button"
                        class="cc2-booking-tab active"
                        data-booking-tab="one-way"
                    >
                        🚕 &nbsp; One Way
                    </button>


                    <button
                        type="button"
                        class="cc2-booking-tab"
                        data-booking-tab="round-trip"
                    >
                        ⇄ &nbsp; Round Trip
                    </button>


                    <button
                        type="button"
                        class="cc2-booking-tab"
                        data-booking-tab="airport"
                    >
                        ✈ &nbsp; Airport Transfer
                    </button>


                    <button
                        type="button"
                        class="cc2-booking-tab"
                        data-booking-tab="hourly"
                    >
                        ◷ &nbsp; Hourly Rental
                    </button>

                </div>


                <div class="cc2-booking-trust-top">

                    <span>
                        🚕
                        <strong>Book Online Cab</strong>
                    </span>

                    <span>
                        👥
                        Trusted by 30K+ travellers
                    </span>

                </div>

            </div>


            {{-- Search Form --}}

            <form
                class="cc2-search-form"
                id="cc2SearchForm"
                action="#"
                method="GET"
            >

                {{-- Pickup --}}

                <div class="cc2-field">

                    <label>

                        <span class="cc2-location-icon cc2-yellow-icon">

                            <svg viewBox="0 0 24 24">
                                <path d="M12 21s7-6.2 7-12a7 7 0 1 0-14 0c0 5.8 7 12 7 12z"/>
                                <circle cx="12" cy="9" r="2.3"/>
                            </svg>

                        </span>

                        PICKUP LOCATION

                    </label>


                    <input
                        type="text"
                        name="pickup"
                        id="cc2PickupLocation"
                        class="cc2-location-input"
                        placeholder="Enter pickup location"
                        autocomplete="off"
                    >


                    <small>
                        e.g. Jaipur Railway Station
                    </small>

                </div>


                {{-- Swap --}}

                <button
                    type="button"
                    class="cc2-swap-btn"
                    id="cc2SwapLocation"
                    title="Swap locations"
                    aria-label="Swap pickup and drop"
                >

                    <svg viewBox="0 0 24 24">
                        <path d="M7 7h12"/>
                        <path d="M16 4l3 3-3 3"/>
                        <path d="M17 17H5"/>
                        <path d="M8 14l-3 3 3 3"/>
                    </svg>

                </button>


                {{-- Drop --}}

                <div class="cc2-field">

                    <label>

                        <span class="cc2-location-icon cc2-blue-icon">

                            <svg viewBox="0 0 24 24">
                                <path d="M12 21s7-6.2 7-12a7 7 0 1 0-14 0c0 5.8 7 12 7 12z"/>
                                <circle cx="12" cy="9" r="2.3"/>
                            </svg>

                        </span>

                        DROP LOCATION

                    </label>


                    <input
                        type="text"
                        name="drop"
                        id="cc2DropLocation"
                        class="cc2-location-input"
                        placeholder="Enter drop location"
                        autocomplete="off"
                    >


                    <small>
                        e.g. Ajmer, Delhi, Udaipur
                    </small>

                </div>


                {{-- Travel Date --}}

                <div class="cc2-field cc2-date-field">

                <div class="cc2-field-label">

                    <label>

                        <span class="cc2-location-icon cc2-yellow-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="4" y="5" width="16" height="15" rx="2"/>
                            <path d="M8 3v4M16 3v4M4 10h16"/>
                        </svg>
                    </span>

                        TRAVEL DATE

                    </label>





                </div>

                <input
                    type="date"
                    name="date"
                    id="cc2TravelDate"
                >

                <small>
                    Select your journey date
                </small>

            </div>


            {{-- RETURN DATE --}}
            <div
                class="cc2-field cc2-date-field cc2-return-date-field"
                id="cc2ReturnDateField"
                style="display: none;"
            >

                <div class="cc2-field-label">

                    
                    <label>

                        <span class="cc2-location-icon cc2-blue-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="4" y="5" width="16" height="15" rx="2"/>
                                <path d="M8 3v4M16 3v4M4 10h16"/>
                            </svg>
                        </span>


                        RETURN DATE

                    </label>

                </div>

                <input
                    type="date"
                    name="return_date"
                    id="cc2ReturnDate"
                >

                <small>
                    Select your return date
                </small>

            </div>

                {{-- AIRPORT TRANSFER FIELDS --}}
            <div
                class="cc2-airport-fields"
                id="cc2AirportFields"
                style="display: none;"
            >

                {{-- Airport --}}
                <div class="cc2-field">

                    <label>
                        <span class="cc2-location-icon cc2-yellow-icon">
                            ✈
                        </span>

                        AIRPORT
                    </label>

                    <select
                        name="airport"
                        id="cc2Airport"
                    >
                        <option value="">Select Airport</option>
                        <option value="Jaipur International Airport">
                            Jaipur International Airport
                        </option>
                        <option value="Delhi Airport">
                            Delhi Airport
                        </option>
                        <option value="Jodhpur Airport">
                            Jodhpur Airport
                        </option>
                        <option value="Udaipur Airport">
                            Udaipur Airport
                        </option>
                    </select>

                    <small>
                        Select airport
                    </small>

                </div>


                {{-- From --}}
                <div class="cc2-field">

                    <label>
                        <span class="cc2-location-icon cc2-blue-icon">
                            📍
                        </span>

                        FROM (PICK-UP)
                    </label>

                    <input
                        type="text"
                        name="airport_from"
                        id="cc2AirportFrom"
                        class="cc2-location-input"
                        placeholder="Enter pickup location"
                        autocomplete="off"
                    >

                    <small>
                        e.g. Hotel, Railway Station
                    </small>

                </div>


                {{-- To --}}
                <div class="cc2-field">

                    <label>
                        <span class="cc2-location-icon cc2-blue-icon">
                            📍
                        </span>

                        TO (DROP-OFF)
                    </label>

                    <input
                        type="text"
                        name="airport_to"
                        id="cc2AirportTo"
                        class="cc2-location-input"
                        placeholder="Enter drop location"
                        autocomplete="off"
                    >

                    <small>
                        e.g. Hotel, MG Road
                    </small>

                </div>


                {{-- Pickup Date & Time --}}
                <div class="cc2-field cc2-date-field">

                    <div class="cc2-field-label">

                        <label>

                            <span class="cc2-location-icon cc2-yellow-icon">
                                🗓
                            </span>

                            PICK-UP DATE & TIME

                        </label>

                    </div>

                    <input
                        type="datetime-local"
                        name="airport_datetime"
                        id="cc2AirportDateTime"
                    >

                    <small>
                        Select pickup date & time
                    </small>

                </div>

            </div>

            {{-- HOURLY RENTAL FIELDS --}}
                <div
                    class="cc2-hourly-fields"
                    id="cc2HourlyFields"
                    style="display: none;"
                >

                    {{-- Pickup Location --}}
                    <div class="cc2-field">

                        <label>
                            <span class="cc2-location-icon cc2-blue-icon">
                                📍
                            </span>

                            FROM (PICK-UP)
                        </label>

                        <input
                            type="text"
                            name="hourly_pickup"
                            id="cc2HourlyPickup"
                            class="cc2-location-input"
                            placeholder="Select Pick-up Location"
                            autocomplete="off"
                        >

                        <small>
                            e.g. Railway Station, Hotel, Airport
                        </small>

                    </div>


                    {{-- Pickup Date & Time --}}
                    <div class="cc2-field cc2-date-field">

                        <div class="cc2-field-label">

                            <label>

                                <span class="cc2-location-icon cc2-yellow-icon">
                                    🗓
                                </span>

                                PICK-UP DATE & TIME

                            </label>

                        </div>

                        <input
                            type="datetime-local"
                            name="hourly_datetime"
                            id="cc2HourlyDateTime"
                        >

                        <small>
                            Select pickup date & time
                        </small>

                    </div>


                    {{-- Rent For --}}
                    <div class="cc2-field">

                        <label>

                            <span class="cc2-location-icon cc2-blue-icon">
                                ◷
                            </span>

                            RENT FOR

                        </label>

                        <select
                            name="hourly_hours"
                            id="cc2HourlyHours"
                        >

                            <option value="">Select Hours</option>

                            <option value="2">
                                2 Hours
                            </option>

                            <option value="4">
                                4 Hours
                            </option>

                            <option value="6">
                                6 Hours
                            </option>

                            <option value="8">
                                8 Hours
                            </option>

                            <option value="10">
                                10 Hours
                            </option>

                            <option value="12">
                                12 Hours
                            </option>

                        </select>

                        <small>
                            Choose rental duration
                        </small>

                    </div>

                </div>
                {{-- Search Button --}}

                <button
                    type="submit"
                    class="cc2-search-btn"
                >

                    <span class="cc2-search-icon">

                        <svg viewBox="0 0 24 24">
                            <circle cx="10.8" cy="10.8" r="6.8"/>
                            <path d="M16 16l5 5"/>
                        </svg>

                    </span>

                    <span>
                        Search Cabs
                    </span>

                    <strong>
                        →
                    </strong>

                </button>

            </form>

        </div>
        {{-- =====================================================
             LEFT HERO CONTENT
        ====================================================== --}}

        <div class="cc2-hero-content">

            <div class="cc2-hero-eyebrow">

                <span></span>

                EXPLORE RAJASTHAN & BEYOND

                <span></span>

            </div>


            <h1>
                Your Journey,
                <strong>Our Responsibility.</strong>
            </h1>


            <p>
                Book comfortable cabs for local rides, outstation trips,
                airport transfers and one-way journeys across Rajasthan.
            </p>

        </div>


        {{-- =====================================================
             RIGHT HERO BENEFITS
        ====================================================== --}}

        


       

        

    </div>

</section>


{{-- =========================================================
    QUICK SERVICE STRIP
========================================================= --}}
<section class="cc2-service-strip">

    <div class="cc2-container">

        <div class="cc2-service-grid">

            <div class="cc2-service-item">
                <div class="cc2-service-icon">🚕</div>
                <div>
                    <strong>Local Cabs</strong>
                    <span>Quick city rides</span>
                </div>
            </div>

            <div class="cc2-service-item">
                <div class="cc2-service-icon">🛣️</div>
                <div>
                    <strong>Outstation</strong>
                    <span>One way & round trip</span>
                </div>
            </div>

            <div class="cc2-service-item">
                <div class="cc2-service-icon">✈️</div>
                <div>
                    <strong>Airport Transfer</strong>
                    <span>On-time pickup & drop</span>
                </div>
            </div>

            <div class="cc2-service-item">
                <div class="cc2-service-icon">⏱️</div>
                <div>
                    <strong>Hourly Rental</strong>
                    <span>Flexible travel plans</span>
                </div>
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    POPULAR ROUTES
========================================================= --}}
<section class="cc2-section cc2-routes-section">

    <div class="cc2-container">

        <div class="cc2-section-head">

            <div>
                <span class="cc2-section-label">POPULAR ROUTES</span>

                <h2>
                    Travel From <span>Jaipur</span>
                    to Your Favourite Destinations
                </h2>

                <p>
                    Comfortable and reliable rides for your next journey.
                </p>
            </div>

            <a href="#" class="cc2-outline-btn">
                View All Routes →
            </a>

        </div>


        <div class="cc2-route-grid">

            <a href="#" class="cc2-route-card">

                <div class="cc2-route-image">
                    <img src="{{ asset('assets/images/route-jodhpur.png') }}"
                         alt="Jaipur to Ajmer">

                    <span>Popular</span>
                </div>

                <div class="cc2-route-content">
                    <div>
                        <small>FROM JAIPUR</small>
                        <h3>Jaipur → Ajmer</h3>
                    </div>

                    <strong>₹999<small> onwards</small></strong>
                </div>

                <p>Approx. 135 km • Comfortable outstation ride</p>

            </a>


            <a href="#" class="cc2-route-card">

                <div class="cc2-route-image">
                    <img src="{{ asset('assets/images/route-udaipur.png') }}"
                         alt="Jaipur to Udaipur">
                </div>

                <div class="cc2-route-content">
                    <div>
                        <small>FROM JAIPUR</small>
                        <h3>Jaipur → Udaipur</h3>
                    </div>

                    <strong>₹2,499<small> onwards</small></strong>
                </div>

                <p>Approx. 395 km • Premium outstation ride</p>

            </a>


            <a href="#" class="cc2-route-card">

                <div class="cc2-route-image">
                    <img src="{{ asset('assets/images/route-jodhpur.png') }}"
                         alt="Jaipur to Jodhpur">
                </div>

                <div class="cc2-route-content">
                    <div>
                        <small>FROM JAIPUR</small>
                        <h3>Jaipur → Jodhpur</h3>
                    </div>

                    <strong>₹2,799<small> onwards</small></strong>
                </div>

                <p>Approx. 335 km • Hassle-free journey</p>

            </a>


            <a href="#" class="cc2-route-card">

                <div class="cc2-route-image">
                    <img src="{{ asset('assets/images/route-delhi.png') }}"
                         alt="Jaipur to Delhi">
                </div>

                <div class="cc2-route-content">
                    <div>
                        <small>FROM JAIPUR</small>
                        <h3>Jaipur → Delhi</h3>
                    </div>

                    <strong>₹2,199<small> onwards</small></strong>
                </div>

                <p>Approx. 280 km • Direct one-way cab</p>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
    OFFERS
========================================================= --}}
<section class="cc2-section cc2-offers-section">

    <div class="cc2-container">

        <div class="cc2-section-head">

            <div>
                <span class="cc2-section-label">SPECIAL OFFERS</span>

                <h2>
                    Ride More,
                    <span>Save More.</span>
                </h2>

                <p>
                    Enjoy exclusive deals on your next Cab-Chalak booking.
                </p>
            </div>

        </div>


        <div class="cc2-offer-grid">

            <div class="cc2-offer-card cc2-offer-yellow">

                <div class="cc2-offer-content">

                    <span>NEW USER OFFER</span>

                    <h3>
                        Get ₹300 OFF
                        on your first ride
                    </h3>

                    <p>
                        Start your journey with Cab-Chalak
                        and enjoy special savings.
                    </p>

                    <div class="cc2-coupon">
                        CAB300
                        <button type="button"
                                class="cc2-copy-code"
                                data-code="CAB300">
                            Copy
                        </button>
                    </div>

                    <a href="#" class="cc2-offer-btn">
                        Book Now →
                    </a>

                </div>

                <div class="cc2-offer-visual">
                    <span>🚕</span>
                </div>

            </div>


            <div class="cc2-offer-card cc2-offer-blue">

                <div class="cc2-offer-content">

                    <span>OUTSTATION SPECIAL</span>

                    <h3>
                        Flat 10% OFF
                        on selected rides
                    </h3>

                    <p>
                        Plan your next outstation trip
                        without worrying about the fare.
                    </p>

                    <div class="cc2-coupon">
                        CHALAK10
                        <button type="button"
                                class="cc2-copy-code"
                                data-code="CHALAK10">
                            Copy
                        </button>
                    </div>

                    <a href="#" class="cc2-offer-btn">
                        Explore Rides →
                    </a>

                </div>

                <div class="cc2-offer-visual">
                    <span>🛣️</span>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    DESTINATIONS
========================================================= --}}
<section class="cc2-section cc2-destination-section">

    <div class="cc2-container">

        <div class="cc2-section-head">

            <div>
                <span class="cc2-section-label">EXPLORE INDIA</span>

                <h2>
                    Popular <span>Destinations</span>
                </h2>

                <p>
                    Discover beautiful cities with a comfortable Cab-Chalak ride.
                </p>
            </div>

            <a href="#" class="cc2-outline-btn">
                Explore All →
            </a>

        </div>


        <div class="cc2-destination-grid">

            <a href="#" class="cc2-destination-card cc2-destination-large">

                <img src="{{ asset('assets/images/destination-jaipur.png') }}"
                     alt="Jaipur">

                <div class="cc2-destination-overlay">

                    <span>RAJASTHAN</span>

                    <h3>Jaipur</h3>

                    <p>The Pink City</p>

                </div>

            </a>


            <a href="#" class="cc2-destination-card">

                <img src="{{ asset('assets/images/destination-udaipur.png') }}"
                     alt="Udaipur">

                <div class="cc2-destination-overlay">

                    <span>RAJASTHAN</span>

                    <h3>Udaipur</h3>

                    <p>City of Lakes</p>

                </div>

            </a>


            <a href="#" class="cc2-destination-card">

                <img src="{{ asset('assets/images/destination-jodhpur.png') }}"
                     alt="Jodhpur">

                <div class="cc2-destination-overlay">

                    <span>RAJASTHAN</span>

                    <h3>Jodhpur</h3>

                    <p>The Blue City</p>

                </div>

            </a>


            <a href="#" class="cc2-destination-card">

                <img src="{{ asset('assets/images/destination-ajmer.png') }}"
                     alt="Ajmer">

                <div class="cc2-destination-overlay">

                    <span>RAJASTHAN</span>

                    <h3>Ajmer</h3>

                    <p>Heritage & Culture</p>

                </div>

            </a>
            <a href="#" class="cc2-destination-card">

                <img src="{{ asset('assets/images/destination-ajmer2.png') }}"
                    alt="Ajmer - Ana Sagar Lake">

                <div class="cc2-destination-overlay">

                    <span>RAJASTHAN</span>

                    <h3>Ajmer</h3>

                    <p>Ana Sagar & Heritage</p>

                </div>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
    HOURLY RENTAL / FLEET
========================================================= --}}
<section class="cc2-section cc2-fleet-section">

    <div class="cc2-container">

        <div class="cc2-section-head">

            <div>
                <span class="cc2-section-label">OUR FLEET</span>

                <h2>
                    Comfortable Cars,
                    <span>For Every Journey.</span>
                </h2>

                <p>
                    Choose the right car for your city ride or outstation trip.
                </p>
            </div>

            <a href="#" class="cc2-outline-btn">
                View All Cars →
            </a>

        </div>


        <div class="cc2-fleet-grid">

            <div class="cc2-car-card">

                <div class="cc2-car-image">

                    <img src="{{ asset('assets/images/car-sedan.png') }}"
                         alt="Sedan Cab">

                    <span>Popular</span>

                </div>

                <div class="cc2-car-content">

                    <div class="cc2-car-title">

                        <div>
                            <small>SEDAN</small>
                            <h3>Comfort Sedan</h3>
                        </div>

                        <strong>
                            ₹1,299
                            <small>/ trip</small>
                        </strong>

                    </div>

                    <div class="cc2-car-meta">
                        <span>👤 4 Seats</span>
                        <span>🧳 2 Bags</span>
                        <span>❄ AC</span>
                    </div>

                    <a href="#" class="cc2-card-btn">
                        Book This Cab →
                    </a>

                </div>

            </div>


            <div class="cc2-car-card">

                <div class="cc2-car-image">

                    <img src="{{ asset('assets/images/car-suv.png') }}"
                         alt="SUV Cab">

                </div>

                <div class="cc2-car-content">

                    <div class="cc2-car-title">

                        <div>
                            <small>SUV</small>
                            <h3>Premium SUV</h3>
                        </div>

                        <strong>
                            ₹1,899
                            <small>/ trip</small>
                        </strong>

                    </div>

                    <div class="cc2-car-meta">
                        <span>👤 6 Seats</span>
                        <span>🧳 4 Bags</span>
                        <span>❄ AC</span>
                    </div>

                    <a href="#" class="cc2-card-btn">
                        Book This Cab →
                    </a>

                </div>

            </div>


            <div class="cc2-car-card">

                <div class="cc2-car-image">

                    <img src="{{ asset('assets/images/car-innova.png') }}"
                         alt="Premium Innova Cab">

                </div>

                <div class="cc2-car-content">

                    <div class="cc2-car-title">

                        <div>
                            <small>PREMIUM</small>
                            <h3>Family Traveller</h3>
                        </div>

                        <strong>
                            ₹2,499
                            <small>/ trip</small>
                        </strong>

                    </div>

                    <div class="cc2-car-meta">
                        <span>👤 6-7 Seats</span>
                        <span>🧳 5 Bags</span>
                        <span>❄ AC</span>
                    </div>

                    <a href="#" class="cc2-card-btn">
                        Book This Cab →
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    WHY CAB CHALAK
========================================================= --}}
<section class="cc2-section cc2-why-section">

    <div class="cc2-container">

        <div class="cc2-why-wrapper">

            <div class="cc2-why-content">

                <span class="cc2-section-label">
                    WHY CAB-CHALAK?
                </span>

                <h2>
                    More Than Just
                    <span>A Cab Ride.</span>
                </h2>

                <p>
                    We believe every journey should be comfortable,
                    safe and completely stress-free. From booking to
                    destination, Cab-Chalak keeps your travel simple.
                </p>

                <a href="#" class="cc2-primary-btn">
                    Book Your Ride →
                </a>

            </div>


            <div class="cc2-benefits-grid">

                <div class="cc2-benefit-card">

                    <div class="cc2-benefit-icon">
                        ✓
                    </div>

                    <h3>Verified Drivers</h3>

                    <p>
                        Experienced and verified drivers
                        for a safer journey.
                    </p>

                </div>


                <div class="cc2-benefit-card">

                    <div class="cc2-benefit-icon">
                        ₹
                    </div>

                    <h3>Transparent Fare</h3>

                    <p>
                        Know your fare upfront with
                        no surprise charges.
                    </p>

                </div>


                <div class="cc2-benefit-card">

                    <div class="cc2-benefit-icon">
                        ⏱
                    </div>

                    <h3>On-Time Pickup</h3>

                    <p>
                        We value your time and
                        focus on punctual pickups.
                    </p>

                </div>


                <div class="cc2-benefit-card">

                    <div class="cc2-benefit-icon">
                        ☎
                    </div>

                    <h3>24×7 Support</h3>

                    <p>
                        Our support team is available
                        whenever you need us.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    HOW IT WORKS
========================================================= --}}
<section class="cc2-section cc2-how-section">

    <div class="cc2-container">

        <div class="cc2-centered-head">

            <span class="cc2-section-label">
                SIMPLE BOOKING
            </span>

            <h2>
                Your Ride in
                <span>3 Easy Steps.</span>
            </h2>

            <p>
                Booking your next journey with Cab-Chalak
                takes only a few minutes.
            </p>

        </div>


        <div class="cc2-steps">

            <div class="cc2-step">

                <div class="cc2-step-number">01</div>

                <div class="cc2-step-icon">📍</div>

                <h3>Choose Your Route</h3>

                <p>
                    Enter your pickup location,
                    destination and travel date.
                </p>

            </div>


            <div class="cc2-step-line"></div>


            <div class="cc2-step">

                <div class="cc2-step-number">02</div>

                <div class="cc2-step-icon">🚕</div>

                <h3>Select Your Cab</h3>

                <p>
                    Choose a cab according to
                    your comfort and budget.
                </p>

            </div>


            <div class="cc2-step-line"></div>


            <div class="cc2-step">

                <div class="cc2-step-number">03</div>

                <div class="cc2-step-icon">✓</div>

                <h3>Confirm & Travel</h3>

                <p>
                    Confirm your booking and
                    enjoy a smooth journey.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    BIG CTA
========================================================= --}}
<section class="cc2-cta-section">

    <div class="cc2-container">

        <div class="cc2-cta-card">

            <div class="cc2-cta-content">

                <span class="cc2-section-label">
                    READY TO RIDE?
                </span>

                <h2>
                    Let's Make Your
                    <span>Next Journey Special.</span>
                </h2>

                <p>
                    Book a comfortable Cab-Chalak ride
                    and travel with confidence.
                </p>

                <div class="cc2-cta-buttons">

                    <a href="#" class="cc2-primary-btn">
                        Book a Cab →
                    </a>

                    <a href="{{ route('contact') }}"
                       class="cc2-white-btn">
                        Contact Us
                    </a>

                </div>

            </div>


            <div class="cc2-cta-car">

                <div class="cc2-cta-circle"></div>

                <span>🚕</span>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    TESTIMONIALS
========================================================= --}}
<section class="cc2-section cc2-testimonial-section">

    <div class="cc2-container">

        <div class="cc2-centered-head">

            <span class="cc2-section-label">
                CUSTOMER STORIES
            </span>

            <h2>
                What Our
                <span>Customers Say.</span>
            </h2>

        </div>


        <div class="cc2-testimonial-grid">

            <div class="cc2-testimonial-card">

                <div class="cc2-stars">
                    ★★★★★
                </div>

                <p>
                    "The booking process was very simple and
                    the driver arrived exactly on time.
                    Very comfortable journey."
                </p>

                <div class="cc2-user">

                    <div class="cc2-user-avatar">
                        RK
                    </div>

                    <div>
                        <strong>Rahul Kumar</strong>
                        <span>Jaipur</span>
                    </div>

                </div>

            </div>


            <div class="cc2-testimonial-card">

                <div class="cc2-stars">
                    ★★★★★
                </div>

                <p>
                    "Booked a cab for an outstation trip.
                    The car was clean and the driver was
                    professional throughout the journey."
                </p>

                <div class="cc2-user">

                    <div class="cc2-user-avatar">
                        PS
                    </div>

                    <div>
                        <strong>Priya Sharma</strong>
                        <span>Udaipur</span>
                    </div>

                </div>

            </div>


            <div class="cc2-testimonial-card">

                <div class="cc2-stars">
                    ★★★★★
                </div>

                <p>
                    "Good service, transparent pricing and
                    quick support. I would definitely use
                    Cab-Chalak again."
                </p>

                <div class="cc2-user">

                    <div class="cc2-user-avatar">
                        AM
                    </div>

                    <div>
                        <strong>Amit Meena</strong>
                        <span>Ajmer</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    FAQ
========================================================= --}}
<section class="cc2-section cc2-faq-section">

    <div class="cc2-container">

        <div class="cc2-faq-wrapper">

            <div class="cc2-faq-intro">

                <span class="cc2-section-label">
                    FAQ
                </span>

                <h2>
                    Frequently Asked
                    <span>Questions.</span>
                </h2>

                <p>
                    Everything you need to know before
                    booking your Cab-Chalak ride.
                </p>

                <a href="{{ route('contact') }}"
                   class="cc2-outline-btn">
                    Still Have Questions? →
                </a>

            </div>


            <div class="cc2-faq-list">

                <div class="cc2-faq-item">

                    <button type="button" class="cc2-faq-question">

                        <span>
                            How can I book a Cab-Chalak cab?
                        </span>

                        <strong>+</strong>

                    </button>

                    <div class="cc2-faq-answer">

                        <p>
                            Enter your pickup location, destination
                            and travel date in the booking section,
                            then select the cab that suits your journey.
                        </p>

                    </div>

                </div>


                <div class="cc2-faq-item">

                    <button type="button" class="cc2-faq-question">

                        <span>
                            Do you provide outstation cabs?
                        </span>

                        <strong>+</strong>

                    </button>

                    <div class="cc2-faq-answer">

                        <p>
                            Yes. Cab-Chalak provides one-way and
                            round-trip outstation cab services.
                        </p>

                    </div>

                </div>


                <div class="cc2-faq-item">

                    <button type="button" class="cc2-faq-question">

                        <span>
                            Do you provide airport pickup and drop?
                        </span>

                        <strong>+</strong>

                    </button>

                    <div class="cc2-faq-answer">

                        <p>
                            Yes. Airport pickup and drop services
                            can be booked according to your travel schedule.
                        </p>

                    </div>

                </div>


                <div class="cc2-faq-item">

                    <button type="button" class="cc2-faq-question">

                        <span>
                            Are there any hidden charges?
                        </span>

                        <strong>+</strong>

                    </button>

                    <div class="cc2-faq-answer">

                        <p>
                            Cab-Chalak aims to keep pricing transparent.
                            The final fare will be shown during the booking process.
                        </p>

                    </div>

                </div>


                <div class="cc2-faq-item">

                    <button type="button" class="cc2-faq-question">

                        <span>
                            Is customer support available?
                        </span>

                        <strong>+</strong>

                    </button>

                    <div class="cc2-faq-answer">

                        <p>
                            Our customer support is available to help
                            with booking and travel-related queries.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


@endsection