@extends('frontend.layouts.app')

@section('title', 'About Us | Cab-Chalak')

@section('meta_description', 'Learn more about Cab-Chalak and our commitment to safe, comfortable and reliable travel.')

@section('content')

{{-- =========================================================
    ABOUT HERO
========================================================= --}}
<section class="cc-about-hero">

    <div class="cc-about-hero-overlay"></div>

    <div class="cc-about-container">

        <div class="cc-about-hero-content">

            <span class="cc-about-eyebrow">
                <span></span>
                ABOUT CAB-CHALAK
            </span>

            <h1>
                Your Journey,
                <strong>Our Responsibility.</strong>
            </h1>

            <p>
                We are committed to making every journey safe,
                comfortable, reliable and stress-free.
            </p>

            <div class="cc-about-breadcrumb">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <span>→</span>

                <span>
                    About Us
                </span>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    ABOUT INTRO
========================================================= --}}
<section class="cc-about-intro">

    <div class="cc-about-container">

        <div class="cc-about-intro-grid">

            {{-- Image --}}
            <div class="cc-about-image-wrapper">

                <div class="cc-about-image-main">

                    <img
                        src="{{ asset('assets/images/aboutuspage photo.png') }}"
                        alt="Cab-Chalak Travel"
                    >

                </div>

                <div class="cc-about-image-badge">

                    <strong>
                        100%
                    </strong>

                    <span>
                        Customer Focused
                    </span>

                </div>

            </div>


            {{-- Content --}}
            <div class="cc-about-intro-content">

                <span class="cc-about-small-label">
                    WHO WE ARE
                </span>

                <h2>
                    Moving People,
                    <span>Connecting Journeys.</span>
                </h2>

                <p>
                    Cab-Chalak is a customer-focused travel and cab
                    booking service created to make everyday travel
                    simple, comfortable and dependable.
                </p>

                <p>
                    Whether you are travelling across the city,
                    planning an outstation journey or need a reliable
                    ride for an important trip, our goal is to provide
                    a smooth travel experience from booking to arrival.
                </p>

                <div class="cc-about-highlight">

                    <div class="cc-about-highlight-icon">
                        🚕
                    </div>

                    <div>

                        <strong>
                            Safe. Comfortable. Reliable.
                        </strong>

                        <p>
                            Every journey matters to us.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    OUR MISSION
========================================================= --}}
<section class="cc-about-mission">

    <div class="cc-about-container">

        <div class="cc-about-mission-grid">

            <div class="cc-about-mission-content">

                <span class="cc-about-small-label">
                    OUR MISSION
                </span>

                <h2>
                    Making Every Ride
                    <span>Better.</span>
                </h2>

                <p>
                    Our mission is to provide dependable transportation
                    with a strong focus on customer satisfaction,
                    safety and comfort.
                </p>

                <p>
                    We believe booking a cab should be simple.
                    From choosing your journey to reaching your
                    destination, every step should feel easy and
                    transparent.
                </p>

                <div class="cc-about-mission-points">

                    <div class="cc-about-point">

                        <span>
                            ✓
                        </span>

                        <div>

                            <strong>
                                Customer First
                            </strong>

                            <p>
                                Your comfort and satisfaction come first.
                            </p>

                        </div>

                    </div>


                    <div class="cc-about-point">

                        <span>
                            ✓
                        </span>

                        <div>

                            <strong>
                                Reliable Travel
                            </strong>

                            <p>
                                Dependable rides for your everyday journeys.
                            </p>

                        </div>

                    </div>


                    <div class="cc-about-point">

                        <span>
                            ✓
                        </span>

                        <div>

                            <strong>
                                Simple Booking
                            </strong>

                            <p>
                                Easy and convenient cab booking experience.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <div class="cc-about-mission-card">

                <div class="cc-about-mission-icon">
                    🛡️
                </div>

                <span>
                    OUR PROMISE
                </span>

                <h3>
                    Travel With
                    <strong>Confidence.</strong>
                </h3>

                <p>
                    We work to make every ride comfortable,
                    convenient and dependable for our customers.
                </p>

                <div class="cc-about-mission-line"></div>

                <strong class="cc-about-mission-bottom">
                    Cab-Chalak
                </strong>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    WHY CHOOSE US
========================================================= --}}
<section class="cc-about-why">

    <div class="cc-about-container">

        <div class="cc-about-section-heading">

            <span class="cc-about-small-label">
                WHY CAB-CHALAK
            </span>

            <h2>
                Why Travel With
                <span>Us?</span>
            </h2>

            <p>
                We focus on creating a travel experience that
                puts convenience, comfort and reliability first.
            </p>

        </div>


        <div class="cc-about-feature-grid">


            {{-- Feature 1 --}}
            <div class="cc-about-feature-card">

                <div class="cc-about-feature-icon">
                    🛡️
                </div>

                <h3>
                    Safe & Secure
                </h3>

                <p>
                    Your safety is one of our top priorities
                    throughout your journey.
                </p>

            </div>


            {{-- Feature 2 --}}
            <div class="cc-about-feature-card">

                <div class="cc-about-feature-icon">
                    🚕
                </div>

                <h3>
                    Comfortable Rides
                </h3>

                <p>
                    Enjoy a comfortable travel experience
                    designed around your journey.
                </p>

            </div>


            {{-- Feature 3 --}}
            <div class="cc-about-feature-card">

                <div class="cc-about-feature-icon">
                    ⚡
                </div>

                <h3>
                    Easy Booking
                </h3>

                <p>
                    Simple booking experience without
                    unnecessary complications.
                </p>

            </div>


            {{-- Feature 4 --}}
            <div class="cc-about-feature-card">

                <div class="cc-about-feature-icon">
                    💬
                </div>

                <h3>
                    Customer Support
                </h3>

                <p>
                    We're here to assist you whenever
                    you need help with your journey.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    HOW WE WORK
========================================================= --}}
<section class="cc-about-process">

    <div class="cc-about-container">

        <div class="cc-about-section-heading cc-about-process-heading">

            <span class="cc-about-small-label">
                HOW IT WORKS
            </span>

            <h2>
                Your Journey In
                <span>Three Simple Steps.</span>
            </h2>

        </div>


        <div class="cc-about-process-grid">


            <div class="cc-about-process-card">

                <div class="cc-about-process-number">
                    01
                </div>

                <div class="cc-about-process-icon">
                    🔎
                </div>

                <h3>
                    Choose Your Ride
                </h3>

                <p>
                    Select your route and travel requirements
                    according to your journey.
                </p>

            </div>


            <div class="cc-about-process-card">

                <div class="cc-about-process-number">
                    02
                </div>

                <div class="cc-about-process-icon">
                    📅
                </div>

                <h3>
                    Book Your Journey
                </h3>

                <p>
                    Enter your travel details and confirm
                    your cab booking easily.
                </p>

            </div>


            <div class="cc-about-process-card">

                <div class="cc-about-process-number">
                    03
                </div>

                <div class="cc-about-process-icon">
                    🚕
                </div>

                <h3>
                    Enjoy Your Ride
                </h3>

                <p>
                    Sit back, relax and enjoy your journey
                    with Cab-Chalak.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    FINAL CTA
========================================================= --}}
<section class="cc-about-cta">

    <div class="cc-about-container">

        <div class="cc-about-cta-content">

            <div>

                <span class="cc-about-small-label">
                    START YOUR JOURNEY
                </span>

                <h2>
                    Ready to Ride with
                    <span>Cab-Chalak?</span>
                </h2>

                <p>
                    Book your next journey with us and
                    experience comfortable, reliable travel.
                </p>

            </div>


            <a
                href="{{ url('/') }}"
                class="cc-about-cta-button"
            >
                Book Your Ride
                <span>→</span>
            </a>

        </div>

    </div>

</section>

@endsection