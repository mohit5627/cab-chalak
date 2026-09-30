@extends('frontend.layouts.app')

@section('title', 'Contact Us | Cab-Chalak')

@section('meta_description', 'Contact Cab-Chalak for cab bookings, travel assistance, route information and customer support.')

@section('content')

{{-- =========================================================
    CONTACT HERO
========================================================= --}}
<section class="cc-contact-hero">

    <div class="cc-contact-hero-overlay"></div>

    <div class="cc-contact-container">

        <div class="cc-contact-hero-content">

            <span class="cc-contact-eyebrow">
                <span></span>
                WE ARE HERE TO HELP
            </span>

            <h1>
                Get In <strong>Touch</strong>
            </h1>

            <p>
                Have a question about your journey?
                Our team is here to help you with bookings,
                routes and travel assistance.
            </p>

            <div class="cc-contact-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>→</span>
                <span>Contact</span>
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    CONTACT MAIN SECTION
========================================================= --}}
<section class="cc-contact-section">

    <div class="cc-contact-container">

        <div class="cc-contact-grid">

            {{-- =================================================
                CONTACT FORM
            ================================================== --}}
            <div class="cc-contact-form-card">

                <div class="cc-contact-section-heading">

                    <span class="cc-contact-small-label">
                        SEND US A MESSAGE
                    </span>

                    <h2>
                        Let's Talk About Your
                        <span>Journey</span>
                    </h2>

                    <p>
                        Fill out the form below and our team will
                        get back to you as soon as possible.
                    </p>

                </div>


                {{-- Success Message --}}
                @if(session('success'))

                    <div class="cc-contact-alert cc-contact-success">

                        <span class="cc-alert-icon">
                            ✓
                        </span>

                        <div>
                            <strong>Thank you!</strong>

                            <p>
                                {{ session('success') }}
                            </p>
                        </div>

                    </div>

                @endif


                {{-- Error Message --}}
                @if(session('error'))

                    <div class="cc-contact-alert cc-contact-error">

                        <span class="cc-alert-icon">
                            !
                        </span>

                        <div>
                            <strong>Sorry!</strong>

                            <p>
                                {{ session('error') }}
                            </p>
                        </div>

                    </div>

                @endif


                {{-- Validation Errors --}}
                @if($errors->any())

                    <div class="cc-contact-alert cc-contact-error">

                        <span class="cc-alert-icon">
                            !
                        </span>

                        <div>

                            <strong>
                                Please check the following:
                            </strong>

                            <ul>

                                @foreach($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                @endif


                {{-- Contact Form --}}
                <form
                    action="{{ route('contact.store') }}"
                    method="POST"
                    class="cc-contact-form"
                    id="contactForm"
                >

                    @csrf


                    {{-- Name + Subject --}}
                    <div class="cc-contact-form-row">

                        <div class="cc-contact-field">

                            <label for="name">
                                Your Name
                                <span>*</span>
                            </label>

                            <div class="cc-contact-input">

                                <span class="cc-input-icon">
                                    👤
                                </span>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your name"
                                    value="{{ old('name') }}"
                                    required
                                >

                            </div>

                        </div>


                        <div class="cc-contact-field">

                            <label for="subject">
                                Subject
                                <span>*</span>
                            </label>

                            <div class="cc-contact-input">

                                <span class="cc-input-icon">
                                    ✦
                                </span>

                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    placeholder="How can we help?"
                                    value="{{ old('subject') }}"
                                    required
                                >

                            </div>

                        </div>

                    </div>


                    {{-- Email + Phone --}}
                    <div class="cc-contact-form-row">

                        <div class="cc-contact-field">

                            <label for="email">
                                Email Address
                                <span>*</span>
                            </label>

                            <div class="cc-contact-input">

                                <span class="cc-input-icon">
                                    ✉
                                </span>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    value="{{ old('email') }}"
                                    required
                                >

                            </div>

                        </div>


                        <div class="cc-contact-field">

                            <label for="phone">
                                Phone Number
                                <span>*</span>
                            </label>

                            <div class="cc-contact-input">

                                <span class="cc-input-icon">
                                    ☎
                                </span>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    placeholder="Enter your phone"
                                    value="{{ old('phone') }}"
                                    required
                                >

                            </div>

                        </div>

                    </div>


                    {{-- Message --}}
                    <div class="cc-contact-field">

                        <label for="message">
                            Your Message
                            <span>*</span>
                        </label>

                        <div class="cc-contact-textarea">

                            <span class="cc-textarea-icon">
                                ✎
                            </span>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Tell us how we can help you..."
                                required
                            >{{ old('message') }}</textarea>

                        </div>

                    </div>


                    {{-- Submit --}}
                    <div class="cc-contact-submit">

                        <button type="submit">

                            <span>
                                Send Message
                            </span>

                            <span class="cc-submit-arrow">
                                →
                            </span>

                        </button>

                    </div>

                </form>

            </div>


            {{-- =================================================
                CONTACT INFORMATION
            ================================================== --}}
            <div class="cc-contact-info-wrapper">

                <div class="cc-contact-info-heading">

                    <span class="cc-contact-small-label">
                        CONTACT INFORMATION
                    </span>

                    <h2>
                        We're Just a
                        <span>Call Away</span>
                    </h2>

                    <p>
                        Whether you need help with a booking,
                        route information or anything else,
                        feel free to contact us.
                    </p>

                </div>


                <div class="cc-contact-info-list">


                    {{-- Phone --}}
                    <div class="cc-contact-info-card">

                        <div class="cc-contact-info-icon">
                            ☎
                        </div>

                        <div class="cc-contact-info-content">

                            <span>
                                CALL / WHATSAPP
                            </span>

                            <a href="tel:+919999999999">
                                +91 99999 99999
                            </a>

                            <p>
                                Available for booking assistance
                            </p>

                        </div>

                    </div>


                    {{-- Email --}}
                    <div class="cc-contact-info-card">

                        <div class="cc-contact-info-icon">
                            ✉
                        </div>

                        <div class="cc-contact-info-content">

                            <span>
                                EMAIL US
                            </span>

                            <a href="mailto:info@cab-chalak.com">
                                info@cab-chalak.com
                            </a>

                            <p>
                                We usually respond within 24 hours
                            </p>

                        </div>

                    </div>


                    {{-- Operating Hours --}}
                    <div class="cc-contact-info-card">

                        <div class="cc-contact-info-icon">
                            ◷
                        </div>

                        <div class="cc-contact-info-content">

                            <span>
                                OPERATING HOURS
                            </span>

                            <strong>
                                24 × 7 Support
                            </strong>

                            <p>
                                We're available whenever you need us
                            </p>

                        </div>

                    </div>


                    {{-- Address --}}
                    <div class="cc-contact-info-card">

                        <div class="cc-contact-info-icon">
                            ⌖
                        </div>

                        <div class="cc-contact-info-content">

                            <span>
                                OUR LOCATION
                            </span>

                            <strong>
                                Jaipur, Rajasthan, India
                            </strong>

                            <p>
                                Visit us or reach out online
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Quick Booking Card --}}
                <div class="cc-contact-booking-card">

                    <div class="cc-contact-booking-icon">
                        🚕
                    </div>

                    <div>

                        <span>
                            NEED A RIDE?
                        </span>

                        <h3>
                            Book your journey today.
                        </h3>

                    </div>

                    <a href="{{ url('/') }}">
                        Book Now →
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    MAP SECTION
========================================================= --}}
<section class="cc-contact-map-section">

    <div class="cc-contact-container">

        <div class="cc-contact-map-heading">

            <div>

                <span class="cc-contact-small-label">
                    FIND US
                </span>

                <h2>
                    Visit Our <span>Location</span>
                </h2>

            </div>

            <p>
                We're always happy to help you plan your next journey.
            </p>

        </div>

    </div>


    <div class="cc-contact-map">

        <iframe
            src="https://www.google.com/maps?q=Jaipur,Rajasthan,India&output=embed"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>

</section>


{{-- =========================================================
    FINAL CTA
========================================================= --}}
<section class="cc-contact-final-cta">

    <div class="cc-contact-container">

        <div class="cc-contact-final-content">

            <span class="cc-contact-final-icon">
                🚕
            </span>

            <div>

                <span class="cc-contact-small-label">
                    YOUR JOURNEY STARTS HERE
                </span>

                <h2>
                    Ready to Travel with
                    <span>Cab-Chalak?</span>
                </h2>

                <p>
                    Book your ride today and enjoy a safe,
                    comfortable and reliable journey.
                </p>

            </div>

            <a
                href="{{ url('/') }}"
                class="cc-contact-final-btn"
            >
                Book Your Ride
                <span>→</span>
            </a>

        </div>

    </div>

</section>


{{-- =========================================================
    SUCCESS MODAL
========================================================= --}}
<div
    class="cc-contact-modal"
    id="successModal"
    aria-hidden="true"
>

    <div class="cc-contact-modal-overlay"></div>

    <div class="cc-contact-modal-box">

        <button
            type="button"
            class="cc-contact-modal-close"
            data-close-modal
        >
            ×
        </button>

        <div class="cc-modal-icon success">
            ✓
        </div>

        <h3>
            Thank You!
        </h3>

        <p>
            Your message has been successfully sent.
            Our team will contact you shortly.
        </p>

        <button
            type="button"
            class="cc-modal-ok"
            data-close-modal
        >
            Done
        </button>

    </div>

</div>


{{-- =========================================================
    ERROR MODAL
========================================================= --}}
<div
    class="cc-contact-modal"
    id="errorModal"
    aria-hidden="true"
>

    <div class="cc-contact-modal-overlay"></div>

    <div class="cc-contact-modal-box">

        <button
            type="button"
            class="cc-contact-modal-close"
            data-close-modal
        >
            ×
        </button>

        <div class="cc-modal-icon error">
            !
        </div>

        <h3>
            Something Went Wrong
        </h3>

        <p>
            We couldn't send your message right now.
            Please try again.
        </p>

        <button
            type="button"
            class="cc-modal-ok"
            data-close-modal
        >
            Try Again
        </button>

    </div>

</div>

@endsection