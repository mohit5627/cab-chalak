{{-- =========================================================
     CAB-CHALAK FOOTER
========================================================= --}}

<footer class="cc-footer">

    {{-- CTA --}}
    <div class="cc-footer-cta-wrap">

        <div class="cc-footer-container">

            <div class="cc-footer-cta">

                <div class="cc-footer-cta-content">

                    <span class="cc-footer-cta-label">
                        NEED A CAB TODAY?
                    </span>

                    <h2>
                        Book your taxi or tour with
                        <span>Cab-Chalak.</span>
                    </h2>

                </div>

                <a
                    href="tel:+919999999999"
                    class="cc-footer-call"
                >
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                        19.79 19.79 0 0 1-8.63-3.07
                        19.5 19.5 0 0 1-6-6
                        A19.79 19.79 0 0 1 2.12 4.18
                        2 2 0 0 1 4.11 2h3
                        a2 2 0 0 1 2 1.72
                        12.84 12.84 0 0 0 .7 2.81
                        2 2 0 0 1-.45 2.11L8.09 9.91
                        a16 16 0 0 0 6 6l1.27-1.27
                        a2 2 0 0 1 2.11-.45
                        12.84 12.84 0 0 0 2.81.7
                        A2 2 0 0 1 22 16.92z">
                        </path>
                    </svg>

                    +91 99999 99999

                </a>

            </div>

        </div>

    </div>


    {{-- MAIN FOOTER --}}
    <div class="cc-footer-main">

        <div class="cc-footer-container">

            <div class="cc-footer-grid">


                {{-- BRAND --}}
                <div class="cc-footer-brand">

                    <a
                        href="{{ url('/') }}"
                        class="cc-footer-logo"
                    >

                        <span class="cc-footer-logo-mark">
                            🚕
                        </span>

                        <span class="cc-footer-logo-text">
                            Cab<span>-Chalak</span>
                        </span>

                    </a>


                    <p>
                        Comfortable, reliable and affordable cab
                        services for local rides, outstation trips,
                        airport transfers and journeys across Rajasthan.
                    </p>


                    {{-- Social --}}
                    <div class="cc-footer-social">

                        <a
                            href="#"
                            aria-label="Instagram"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <rect
                                    x="3"
                                    y="3"
                                    width="18"
                                    height="18"
                                    rx="5"
                                ></rect>

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="4"
                                ></circle>

                                <circle
                                    cx="17.5"
                                    cy="6.5"
                                    r="1"
                                    fill="currentColor"
                                    stroke="none"
                                ></circle>
                            </svg>
                        </a>


                        <a
                            href="#"
                            aria-label="Facebook"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M15 8h3V4h-3
                                c-3.31 0-5 1.69-5 5v3H7v4h3v4h4v-4h3l1-4h-4V9c0-.67.33-1 1-1z">
                                </path>
                            </svg>
                        </a>


                        <a
                            href="#"
                            aria-label="LinkedIn"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <rect
                                    x="4"
                                    y="4"
                                    width="16"
                                    height="16"
                                    rx="2"
                                ></rect>

                                <path d="M8 10v6"></path>

                                <circle
                                    cx="8"
                                    cy="7.5"
                                    r="1"
                                    fill="currentColor"
                                    stroke="none"
                                ></circle>

                                <path d="M12 16v-3.2
                                a2.8 2.8 0 0 1 5.6 0V16">
                                </path>
                            </svg>
                        </a>


                        <a
                            href="#"
                            aria-label="Twitter"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path d="M5 5l14 14"></path>
                                <path d="M19 5L5 19"></path>
                            </svg>
                        </a>

                    </div>

                </div>


                {{-- QUICK LINKS --}}
                <div class="cc-footer-column">

                    <h3>
                        Quick Links
                    </h3>

                    <span class="cc-footer-line"></span>

                    <ul>

                        <li>
                            <a href="{{ url('/') }}">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about') }}">
                                About Us
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Services
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Travel Plans
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- SERVICES --}}
                <div class="cc-footer-column">

                    <h3>
                        Our Services
                    </h3>

                    <span class="cc-footer-line"></span>

                    <ul>

                        <li>
                            <a href="#">
                                Local Cab Service
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Outstation Cab
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Airport Transfer
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                One Way Taxi
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Round Trip Taxi
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- CONTACT --}}
                <div class="cc-footer-contact">

                    <h3>
                        Contact Us
                    </h3>

                    <span class="cc-footer-line"></span>


                    <div class="cc-footer-contact-item">

                        <span class="cc-footer-contact-icon">
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                                19.79 19.79 0 0 1-8.63-3.07
                                19.5 19.5 0 0 1-6-6
                                A19.79 19.79 0 0 1 2.12 4.18
                                2 2 0 0 1 4.11 2h3
                                a2 2 0 0 1 2 1.72
                                12.84 12.84 0 0 0 .7 2.81
                                2 2 0 0 1-.45 2.11L8.09 9.91
                                a16 16 0 0 0 6 6l1.27-1.27
                                a2 2 0 0 1 2.11-.45
                                12.84 12.84 0 0 0 2.81.7
                                A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                        </span>

                        <a href="tel:+919999999999">
                            +91 99999 99999
                        </a>

                    </div>


                    <div class="cc-footer-contact-item">

                        <span class="cc-footer-contact-icon">
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="14"
                                    rx="2"
                                ></rect>

                                <path d="m3 7 9 6 9-6"></path>
                            </svg>
                        </span>

                        <a href="mailto:info@cab-chalak.com">
                            info@cab-chalak.com
                        </a>

                    </div>


                    <div class="cc-footer-contact-item">

                        <span class="cc-footer-contact-icon">
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path d="M20 10c0 5-8 12-8 12S4 15 4 10
                                a8 8 0 1 1 16 0z">
                                </path>

                                <circle
                                    cx="12"
                                    cy="10"
                                    r="2.5"
                                ></circle>
                            </svg>
                        </span>

                        <span>
                            Jaipur, Rajasthan,<br>
                            India
                        </span>

                    </div>


                    <a
                        href="{{ route('contact') }}"
                        class="cc-footer-enquiry"
                    >
                        Send Enquiry

                        <span>→</span>
                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- BOTTOM BAR --}}
    <div class="cc-footer-bottom">

        <div class="cc-footer-container">

            <div class="cc-footer-bottom-inner">

                <p>
                    © {{ date('Y') }} Cab-Chalak.
                    All Rights Reserved.
                </p>

                <div class="cc-footer-bottom-links">

                    <a href="#">
                        Privacy Policy
                    </a>

                    <a href="#">
                        Terms & Conditions
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>