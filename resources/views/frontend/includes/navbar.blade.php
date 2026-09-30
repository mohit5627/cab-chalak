<header class="site-header">

    <div class="container">

        <div class="navbar-box">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="site-logo">

                <span class="site-logo-mark">
                    <span class="logo-car">🚕</span>
                </span>

                <span class="site-logo-content">
                    <span class="site-logo-name">
                        Cab<span>-Chalak</span>
                    </span>

                    <small>
                        RIDE <b>•</b> BOOK <b>•</b> GROW
                    </small>
                </span>

            </a>


            {{-- Desktop Navigation --}}
            <nav class="main-nav" id="mainNav">

                <a
                    href="{{ url('/') }}"
                    class="{{ request()->is('/') ? 'active' : '' }}"
                >
                    Home
                </a>

                <a
                    href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'active' : '' }}"
                >
                    About Us
                </a>

                <a href="#">
                    Services
                </a>

                <a href="#">
                    Travel Plans
                </a>

                <a href="#">
                    Book Taxi
                </a>

                <a href="#">
                    Destination
                </a>

                <a
                    href="{{ url('/contact') }}"
                    class="{{ request()->is('contact') ? 'active' : '' }}"
                >
                    Contact
                </a>

            </nav>


            {{-- Right Actions --}}
            <div class="navbar-actions">

                {{-- Search --}}
                <button
                    type="button"
                    class="nav-search-btn"
                    aria-label="Search"
                >
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.2"
                    >
                        <circle cx="11" cy="11" r="7"></circle>
                        <path d="m20 20-4-4"></path>
                    </svg>
                </button>


                {{-- Call --}}
                <a href="tel:+910000000000" class="nav-call-btn">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.2"
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

                    <span>Call Us</span>

                </a>


                {{-- Login --}}
                @auth

                    <!-- <a
                        href="{{ route('dashboard') }}"
                        class="nav-login-btn"
                    >
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>

                        Dashboard
                    </a> -->

                @else

                    <a
                        href="{{ route('login') }}"
                        class="nav-login-btn"
                    >
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M20 21a8 8 0 0 0-16 0"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>

                        Login
                    </a>

                @endauth

            </div>


            {{-- Mobile Menu Button --}}
            <button
                type="button"
                class="mobile-menu-btn"
                id="mobileMenuBtn"
                aria-label="Open navigation"
                aria-expanded="false"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

    </div>

</header>