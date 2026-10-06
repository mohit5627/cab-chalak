<header class="site-header">

    <div class="container">

        <div class="navbar-box">

            {{-- Logo --}}
            {{-- <a href="{{ url('/') }}" class="site-logo">

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

            </a> --}}
            <a href="{{ url('/') }}" class="site-logo">

                <span class="site-logo">
                    <img src="{{ asset('assets/images/cab-chalak-logo-1.png') }}"
                        alt="Cab-Chalak Logo"
                        class="site-logo-img" style="height: 100px; width: auto; object-fit: contain; display: block;"  >
                </span>

            </a>


            {{-- Desktop Navigation --}}
            {{-- <nav class="main-nav" id="mainNav">

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

            </nav> --}}
            <nav class="main-nav" id="mainNav">

                {{-- Flights --}}
                <a href="#" class="main-nav-item">
                    <span class="main-nav-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M2.5 16.5 21.5 9l-4-2-5 1.5-3-5-2 .5 1.5 6L4 12l-1.5-1.5-1 .8 2 2.2-1 3z"/>
                        </svg>
                    </span>
                    <span>Flights</span>
                </a>


                {{-- Hotels --}}
                <a href="#" class="main-nav-item">
                    <span class="main-nav-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M4 21V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16"/>
                            <path d="M2 21h20"/>
                            <path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/>
                        </svg>
                    </span>
                    <span>Hotels</span>
                </a>


                {{-- Trains --}}
                <a href="#" class="main-nav-item">
                    <span class="main-nav-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="6" y="3" width="12" height="15" rx="3"/>
                            <path d="M6 13h12"/>
                            <path d="M9 7h.01M15 7h.01"/>
                            <path d="M8 21l2-3M16 21l-2-3"/>
                            <path d="M3 21h18"/>
                        </svg>
                    </span>
                    <span>Trains</span>
                </a>


                {{-- Cabs --}}
                <a
                    href="{{ url('/') }}"
                    class="main-nav-item {{ request()->is('/') ? 'active' : '' }}"
                >
                    <span class="main-nav-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M5 16V10l2-5h10l2 5v6"/>
                            <path d="M3 16h18v3H3z"/>
                            <path d="M7 10h10"/>
                            <circle cx="7" cy="16" r="1.3"/>
                            <circle cx="17" cy="16" r="1.3"/>
                        </svg>
                    </span>
                    <span>Cabs</span>
                </a>


                {{-- Bus --}}
                <a href="#" class="main-nav-item">
                    <span class="main-nav-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="5" y="3" width="14" height="17" rx="3"/>
                            <path d="M5 13h14"/>
                            <path d="M8 7h.01M16 7h.01"/>
                            <circle cx="8" cy="17" r="1"/>
                            <circle cx="16" cy="17" r="1"/>
                            <path d="M3 21h18"/>
                        </svg>
                    </span>
                    <span>Bus</span>
                </a>


                {{-- Holidays --}}
                <a href="#" class="main-nav-item">
                    <span class="main-nav-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M2 17c4-2 6-2 10 0s6 2 10 0"/>
                            <path d="M4 14c4-2 7-1 10 1"/>
                            <path d="M15 3l-1 7"/>
                            <path d="M14 10l5-3"/>
                            <path d="M14 10l-5-3"/>
                        </svg>
                    </span>
                    <span>Holidays</span>
                </a>


                {{-- Forex --}}
                <a href="#" class="main-nav-item">
                    <span class="main-nav-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="8" cy="12" r="4"/>
                            <circle cx="16" cy="12" r="4"/>
                            <path d="M6 12h4M14 12h4"/>
                        </svg>
                    </span>
                    <span>Forex</span>
                </a>


                {{-- Insurance --}}
                <a href="#" class="main-nav-item">
                    <span class="main-nav-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6l7-3z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>
                    </span>
                    <span>Insurance</span>
                </a>

            </nav>


            {{-- Right Actions --}}
            <div class="navbar-actions">

                {{-- Search --}}
                {{-- <button
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
                </button> --}}


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
<style>
   .site-logo {
    display: flex;
    align-items: center;
    height: 100%;
    flex-shrink: 0;
}

.site-logo-img {
    height: 60px;
    width: auto;
    object-fit: contain;
    display: block;
    transform: scale(1.80);
    transform-origin: center;
}
.navbar-box {
    padding-left: 42px;
    padding-right: 32px;
    box-sizing: border-box;
}
</style>