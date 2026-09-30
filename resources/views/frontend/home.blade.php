@extends('frontend.layouts.app')

@section('title', 'Cab-Chalak | Book Your Ride')

@section('meta_description', 'Book safe, comfortable and reliable cabs with Cab-Chalak. Travel across Jaipur with trusted drivers and transparent pricing.')

@section('content')

{{-- =========================================================
     HERO SECTION
========================================================= --}}

<section class="cc-home-hero">

    <div class="cc-home-hero-bg cc-home-hero-bg-one"></div>
    <div class="cc-home-hero-bg cc-home-hero-bg-two"></div>

    <div class="cc-home-container">

        <div class="cc-home-hero-grid">

            {{-- LEFT CONTENT --}}
            <div class="cc-home-hero-content">

                <div class="cc-home-badge">
                    <span class="cc-home-badge-dot"></span>
                    Reliable rides. Better journeys.
                </div>

                <h1>
                    Your Journey,
                    <span>Our Responsibility.</span>
                </h1>

                <p class="cc-home-hero-text">
                    Book comfortable, safe and reliable cabs for your
                    everyday rides, city travel and outstation journeys.
                </p>

                <div class="cc-home-trust-row">

                    <div class="cc-home-trust-item">
                        <span class="cc-home-trust-icon">✓</span>
                        <span>Verified Drivers</span>
                    </div>

                    <div class="cc-home-trust-item">
                        <span class="cc-home-trust-icon">✓</span>
                        <span>Transparent Pricing</span>
                    </div>

                    <div class="cc-home-trust-item">
                        <span class="cc-home-trust-icon">✓</span>
                        <span>24/7 Support</span>
                    </div>

                </div>

            </div>


            {{-- RIGHT CAB VISUAL --}}
            <div class="cc-home-hero-visual">

                <div class="cc-home-glow"></div>

                <div class="cc-home-location-pin cc-pin-one">●</div>
                <div class="cc-home-location-pin cc-pin-two">●</div>

                <div class="cc-home-route-line"></div>

                <div class="cc-home-car-scene">

                    <div class="cc-home-road"></div>

                    <div class="cc-home-car-shadow"></div>

                    <div class="cc-home-car">

                        <div class="cc-home-car-roof"></div>

                        <div class="cc-home-car-window window-one"></div>
                        <div class="cc-home-car-window window-two"></div>

                        <div class="cc-home-car-body"></div>

                        <div class="cc-home-car-light light-one"></div>
                        <div class="cc-home-car-light light-two"></div>

                        <div class="cc-home-wheel wheel-one"></div>
                        <div class="cc-home-wheel wheel-two"></div>

                    </div>

                </div>


                <div class="cc-home-floating-card cc-card-rating">

                    <div class="cc-home-floating-icon">★</div>

                    <div>
                        <strong>4.9/5</strong>
                        <span>Customer Rating</span>
                    </div>

                </div>


                <div class="cc-home-floating-card cc-card-driver">

                    <div class="cc-home-driver-avatar">
                        ✓
                    </div>

                    <div>
                        <strong>Trusted Drivers</strong>
                        <span>Safe & Verified</span>
                    </div>

                </div>

            </div>

        </div>


        {{-- BOOKING SEARCH --}}
        <div class="cc-home-booking-card">

            <div class="cc-home-booking-head">

                <div>
                    <span class="cc-home-booking-label">
                        BOOK YOUR RIDE
                    </span>

                    <h2>
                        Where would you like to go?
                    </h2>
                </div>

                <div class="cc-home-booking-mini">
                    Fast & Easy Booking
                </div>

            </div>


            {{-- Trip Tabs --}}
            <div class="cc-home-trip-tabs">

                <button
                    type="button"
                    class="cc-trip-tab active"
                    data-trip="one-way"
                >
                    One Way
                </button>

                <button
                    type="button"
                    class="cc-trip-tab"
                    data-trip="round-trip"
                >
                    Round Trip
                </button>

                <button
                    type="button"
                    class="cc-trip-tab"
                    data-trip="airport"
                >
                    Airport
                </button>

                <button
                    type="button"
                    class="cc-trip-tab"
                    data-trip="local"
                >
                    Local / Hourly
                </button>

            </div>


            <form
                action="#"
                method="GET"
                class="cc-home-search-form"
                id="ccHomeSearchForm"
            >

                <div class="cc-home-field">

                    <label for="pickup_location">
                        Pickup Location
                    </label>

                    <div class="cc-home-input">

                        <span class="cc-home-input-icon pickup-icon">
                            ●
                        </span>

                        <input
                            type="text"
                            id="pickup_location"
                            name="pickup"
                            placeholder="Enter pickup location"
                            autocomplete="off"
                        >

                    </div>

                </div>


                <button
                    type="button"
                    class="cc-home-swap"
                    id="ccSwapLocations"
                    aria-label="Swap locations"
                >
                    ↔
                </button>


                <div class="cc-home-field">

                    <label for="drop_location">
                        Drop Location
                    </label>

                    <div class="cc-home-input">

                        <span class="cc-home-input-icon drop-icon">
                            ●
                        </span>

                        <input
                            type="text"
                            id="drop_location"
                            name="drop"
                            placeholder="Where are you going?"
                            autocomplete="off"
                        >

                    </div>

                </div>


                <div class="cc-home-field cc-date-field">

                    <label for="pickup_date">
                        Pickup Date
                    </label>

                    <div class="cc-home-input">

                        <span class="cc-home-input-icon">
                            ▣
                        </span>

                        <input
                            type="date"
                            id="pickup_date"
                            name="date"
                        >

                    </div>

                </div>


                <div class="cc-home-field cc-time-field">

                    <label for="pickup_time">
                        Pickup Time
                    </label>

                    <div class="cc-home-input">

                        <span class="cc-home-input-icon">
                            ◷
                        </span>

                        <input
                            type="time"
                            id="pickup_time"
                            name="time"
                        >

                    </div>

                </div>


                <button
                    type="submit"
                    class="cc-home-search-btn"
                >
                    <span>Search Cabs</span>
                    <span class="cc-search-arrow">→</span>
                </button>

            </form>

        </div>

    </div>

</section>


{{-- =========================================================
     TRIP TYPES
========================================================= --}}

<section class="cc-home-section cc-home-trip-section">

    <div class="cc-home-container">

        <div class="cc-home-section-heading">

            <span class="cc-home-eyebrow">
                CHOOSE YOUR RIDE
            </span>

            <h2>
                Travel Your Way
            </h2>

            <p>
                Whether it is a quick city ride or a long journey,
                choose a ride that fits your plans.
            </p>

        </div>


        <div class="cc-home-trip-grid">

            <a href="#" class="cc-home-trip-card">

                <div class="cc-trip-card-icon">
                    →
                </div>

                <div>
                    <h3>One Way</h3>

                    <p>
                        Reach your destination comfortably with a simple one-way ride.
                    </p>
                </div>

                <span class="cc-trip-card-arrow">→</span>

            </a>


            <a href="#" class="cc-home-trip-card">

                <div class="cc-trip-card-icon">
                    ↔
                </div>

                <div>
                    <h3>Round Trip</h3>

                    <p>
                        Plan your complete journey with convenient return travel.
                    </p>
                </div>

                <span class="cc-trip-card-arrow">→</span>

            </a>


            <a href="#" class="cc-home-trip-card">

                <div class="cc-trip-card-icon">
                    ✈
                </div>

                <div>
                    <h3>Airport Transfer</h3>

                    <p>
                        Timely airport pickups and drops with comfortable rides.
                    </p>
                </div>

                <span class="cc-trip-card-arrow">→</span>

            </a>


            <a href="#" class="cc-home-trip-card">

                <div class="cc-trip-card-icon">
                    ◷
                </div>

                <div>
                    <h3>Local / Hourly</h3>

                    <p>
                        Keep a cab with you for local travel and multiple stops.
                    </p>
                </div>

                <span class="cc-trip-card-arrow">→</span>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     POPULAR ROUTES
========================================================= --}}

<section class="cc-home-section cc-home-routes-section">

    <div class="cc-home-container">

        <div class="cc-home-section-heading cc-heading-between">

            <div>

                <span class="cc-home-eyebrow">
                    POPULAR ROUTES
                </span>

                <h2>
                    Explore Popular Destinations
                </h2>

                <p>
                    Discover comfortable cab rides from Jaipur to popular destinations.
                </p>

            </div>

            <a href="#" class="cc-home-outline-btn">
                View All Routes →
            </a>

        </div>


        <div class="cc-home-route-grid">

            <a href="#" class="cc-home-route-card">

                <div class="cc-route-image route-jaipur">
                    <span>JAIPUR</span>
                </div>

                <div class="cc-route-content">

                    <div>
                        <span>Jaipur</span>
                        <strong>→</strong>
                        <span>Ajmer</span>
                    </div>

                    <small>
                        Comfortable outstation rides
                    </small>

                </div>

            </a>


            <a href="#" class="cc-home-route-card">

                <div class="cc-route-image route-delhi">
                    <span>DELHI</span>
                </div>

                <div class="cc-route-content">

                    <div>
                        <span>Jaipur</span>
                        <strong>→</strong>
                        <span>Delhi</span>
                    </div>

                    <small>
                        Reliable intercity travel
                    </small>

                </div>

            </a>


            <a href="#" class="cc-home-route-card">

                <div class="cc-route-image route-pushkar">
                    <span>PUSHKAR</span>
                </div>

                <div class="cc-route-content">

                    <div>
                        <span>Jaipur</span>
                        <strong>→</strong>
                        <span>Pushkar</span>
                    </div>

                    <small>
                        Plan your next getaway
                    </small>

                </div>

            </a>


            <a href="#" class="cc-home-route-card">

                <div class="cc-route-image route-jodhpur">
                    <span>JODHPUR</span>
                </div>

                <div class="cc-route-content">

                    <div>
                        <span>Jaipur</span>
                        <strong>→</strong>
                        <span>Jodhpur</span>
                    </div>

                    <small>
                        Long-distance cab service
                    </small>

                </div>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     WHY CHOOSE US
========================================================= --}}

<section class="cc-home-section cc-home-why-section">

    <div class="cc-home-container">

        <div class="cc-home-why-grid">

            <div class="cc-home-why-visual">

                <div class="cc-home-why-circle"></div>

                <div class="cc-home-stat-card stat-one">
                    <strong>24/7</strong>
                    <span>Support</span>
                </div>

                <div class="cc-home-stat-card stat-two">
                    <strong>100%</strong>
                    <span>Verified Drivers</span>
                </div>

                <div class="cc-home-why-car">
                    🚕
                </div>

            </div>


            <div class="cc-home-why-content">

                <span class="cc-home-eyebrow">
                    WHY CAB-CHALAK
                </span>

                <h2>
                    More Than A Ride,
                    <span>It's Peace of Mind.</span>
                </h2>

                <p>
                    We make every journey simple, comfortable and dependable.
                    From booking to destination, our focus is on providing
                    a smooth travel experience.
                </p>


                <div class="cc-home-benefits">

                    <div class="cc-home-benefit">

                        <div class="cc-benefit-icon">
                            ✓
                        </div>

                        <div>
                            <h3>Verified Drivers</h3>
                            <p>
                                Travel with trusted and verified drivers.
                            </p>
                        </div>

                    </div>


                    <div class="cc-home-benefit">

                        <div class="cc-benefit-icon">
                            ₹
                        </div>

                        <div>
                            <h3>Transparent Pricing</h3>
                            <p>
                                Clear pricing with no unnecessary surprises.
                            </p>
                        </div>

                    </div>


                    <div class="cc-home-benefit">

                        <div class="cc-benefit-icon">
                            ★
                        </div>

                        <div>
                            <h3>Comfortable Vehicles</h3>
                            <p>
                                Choose from clean and comfortable cab options.
                            </p>
                        </div>

                    </div>


                    <div class="cc-home-benefit">

                        <div class="cc-benefit-icon">
                            24
                        </div>

                        <div>
                            <h3>Customer Support</h3>
                            <p>
                                Assistance whenever you need it.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     HOW IT WORKS
========================================================= --}}

<section class="cc-home-section cc-home-process-section">

    <div class="cc-home-container">

        <div class="cc-home-section-heading">

            <span class="cc-home-eyebrow">
                SIMPLE PROCESS
            </span>

            <h2>
                Book Your Cab In 3 Easy Steps
            </h2>

            <p>
                No complicated process. Just choose, book and ride.
            </p>

        </div>


        <div class="cc-home-process-grid">

            <div class="cc-home-process-card">

                <div class="cc-process-number">
                    01
                </div>

                <div class="cc-process-icon">
                    📍
                </div>

                <h3>
                    Choose Your Route
                </h3>

                <p>
                    Enter your pickup and destination details.
                </p>

            </div>


            <div class="cc-home-process-line"></div>


            <div class="cc-home-process-card">

                <div class="cc-process-number">
                    02
                </div>

                <div class="cc-process-icon">
                    🚕
                </div>

                <h3>
                    Select Your Cab
                </h3>

                <p>
                    Choose a vehicle that suits your journey.
                </p>

            </div>


            <div class="cc-home-process-line"></div>


            <div class="cc-home-process-card">

                <div class="cc-process-number">
                    03
                </div>

                <div class="cc-process-icon">
                    ✓
                </div>

                <h3>
                    Confirm & Ride
                </h3>

                <p>
                    Confirm your booking and enjoy the ride.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     CAB CATEGORIES
========================================================= --}}

<section class="cc-home-section cc-home-fleet-section">

    <div class="cc-home-container">

        <div class="cc-home-section-heading cc-heading-between">

            <div>

                <span class="cc-home-eyebrow">
                    OUR CABS
                </span>

                <h2>
                    Choose A Ride That Fits You
                </h2>

                <p>
                    Comfortable vehicles for every type of journey.
                </p>

            </div>

            <a href="#" class="cc-home-outline-btn">
                View All Cabs →
            </a>

        </div>


        <div class="cc-home-fleet-grid">

            <div class="cc-home-fleet-card">

                <div class="cc-fleet-car">
                    🚕
                </div>

                <div class="cc-fleet-info">

                    <span>POPULAR</span>

                    <h3>
                        Sedan
                    </h3>

                    <p>
                        Comfortable rides for everyday travel.
                    </p>

                    <div class="cc-fleet-meta">
                        <span>👤 4 Seats</span>
                        <span>✦ AC</span>
                    </div>

                </div>

            </div>


            <div class="cc-home-fleet-card featured">

                <div class="cc-fleet-tag">
                    BEST FOR FAMILY
                </div>

                <div class="cc-fleet-car">
                    🚙
                </div>

                <div class="cc-fleet-info">

                    <span>COMFORT</span>

                    <h3>
                        SUV
                    </h3>

                    <p>
                        Extra space and comfort for family trips.
                    </p>

                    <div class="cc-fleet-meta">
                        <span>👤 6 Seats</span>
                        <span>✦ AC</span>
                    </div>

                </div>

            </div>


            <div class="cc-home-fleet-card">

                <div class="cc-fleet-car">
                    🚐
                </div>

                <div class="cc-fleet-info">

                    <span>GROUP TRAVEL</span>

                    <h3>
                        Premium
                    </h3>

                    <p>
                        Spacious rides for larger groups.
                    </p>

                    <div class="cc-fleet-meta">
                        <span>👤 7+ Seats</span>
                        <span>✦ AC</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     OFFER / CTA
========================================================= --}}

<section class="cc-home-cta-section">

    <div class="cc-home-container">

        <div class="cc-home-cta">

            <div class="cc-home-cta-glow"></div>

            <div class="cc-home-cta-content">

                <span class="cc-home-eyebrow">
                    READY TO RIDE?
                </span>

                <h2>
                    Your Next Journey
                    <span>Starts Here.</span>
                </h2>

                <p>
                    Book your cab today and experience a comfortable,
                    reliable and hassle-free journey.
                </p>

                <a href="#ccHomeSearchForm" class="cc-home-cta-btn">
                    Book Your Cab
                    <span>→</span>
                </a>

            </div>

            <div class="cc-home-cta-car">
                🚕
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     TESTIMONIALS
========================================================= --}}

<section class="cc-home-section cc-home-testimonial-section">

    <div class="cc-home-container">

        <div class="cc-home-section-heading">

            <span class="cc-home-eyebrow">
                CUSTOMER STORIES
            </span>

            <h2>
                Loved By Our Riders
            </h2>

            <p>
                A few words from people who travelled with Cab-Chalak.
            </p>

        </div>


        <div class="cc-home-testimonial-grid">

            <div class="cc-home-testimonial-card">

                <div class="cc-testimonial-stars">
                    ★★★★★
                </div>

                <p>
                    “The booking process was simple and the driver arrived
                    on time. The complete journey was comfortable.”
                </p>

                <div class="cc-testimonial-user">

                    <div class="cc-testimonial-avatar">
                        RK
                    </div>

                    <div>
                        <strong>Rahul Kumar</strong>
                        <span>Jaipur</span>
                    </div>

                </div>

            </div>


            <div class="cc-home-testimonial-card">

                <div class="cc-testimonial-stars">
                    ★★★★★
                </div>

                <p>
                    “Very smooth experience. The cab was clean and the
                    driver was professional throughout the trip.”
                </p>

                <div class="cc-testimonial-user">

                    <div class="cc-testimonial-avatar">
                        AS
                    </div>

                    <div>
                        <strong>Ankit Sharma</strong>
                        <span>Ajmer</span>
                    </div>

                </div>

            </div>


            <div class="cc-home-testimonial-card">

                <div class="cc-testimonial-stars">
                    ★★★★★
                </div>

                <p>
                    “I liked the transparent pricing and quick booking.
                    Definitely a convenient way to plan a trip.”
                </p>

                <div class="cc-testimonial-user">

                    <div class="cc-testimonial-avatar">
                        PS
                    </div>

                    <div>
                        <strong>Priya Singh</strong>
                        <span>Jaipur</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FAQ
========================================================= --}}

<section class="cc-home-section cc-home-faq-section">

    <div class="cc-home-container">

        <div class="cc-home-section-heading">

            <span class="cc-home-eyebrow">
                HAVE QUESTIONS?
            </span>

            <h2>
                Frequently Asked Questions
            </h2>

            <p>
                Everything you need to know before booking your ride.
            </p>

        </div>


        <div class="cc-home-faq-list">

            <div class="cc-home-faq-item active">

                <button type="button" class="cc-faq-question">

                    <span>
                        How can I book a cab?
                    </span>

                    <b>+</b>

                </button>

                <div class="cc-faq-answer">

                    <p>
                        Enter your pickup location, destination, date and
                        time in the booking section and search for available cabs.
                    </p>

                </div>

            </div>


            <div class="cc-home-faq-item">

                <button type="button" class="cc-faq-question">

                    <span>
                        Can I book an outstation cab?
                    </span>

                    <b>+</b>

                </button>

                <div class="cc-faq-answer">

                    <p>
                        Yes. Cab-Chalak will support one-way and round-trip
                        outstation bookings between available routes.
                    </p>

                </div>

            </div>


            <div class="cc-home-faq-item">

                <button type="button" class="cc-faq-question">

                    <span>
                        Can I choose my preferred cab?
                    </span>

                    <b>+</b>

                </button>

                <div class="cc-faq-answer">

                    <p>
                        Yes. Available vehicle categories can be shown during
                        the booking process so you can select the suitable ride.
                    </p>

                </div>

            </div>


            <div class="cc-home-faq-item">

                <button type="button" class="cc-faq-question">

                    <span>
                        Is online payment available?
                    </span>

                    <b>+</b>

                </button>

                <div class="cc-faq-answer">

                    <p>
                        Online payment options can be integrated into the final
                        booking and checkout process.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FINAL CTA
========================================================= --}}

<section class="cc-home-final-section">

    <div class="cc-home-container">

        <div class="cc-home-final-card">

            <div>

                <span>
                    CAB-CHALAK
                </span>

                <h2>
                    Let's Make Your Journey Comfortable.
                </h2>

            </div>

            <a href="#ccHomeSearchForm">
                Book A Cab →
            </a>

        </div>

    </div>

</section>

@endsection