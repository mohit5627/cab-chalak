<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign In | Cab-Chalak</title>

    <link rel="stylesheet" href="{{ asset('assets/css/frontend.css') }}">
</head>

<body class="login-page">

    <div class="login-wrapper">

        <!-- =========================================
             LOGIN CARD
        ========================================== -->

        <div class="login-card">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="login-logo">
                <div class="login-logo-icon">
                    🚕
                </div>

                <div class="login-logo-text">
                    <span>Cab-</span><strong>Chalak</strong>
                </div>
            </a>


            <!-- Heading -->
            <div class="login-heading">

                <h1>Sign In</h1>

                <p>Access your dashboard</p>

            </div>


            <!-- Session Status -->
            <x-auth-session-status
                class="login-session-status"
                :status="session('status')"
            />


            <!-- Login Form -->
            <form
                method="POST"
                action="{{ route('login') }}"
                class="login-form"
            >

                @csrf


                <!-- Email -->
                <div class="login-field">

                    <div class="login-input-box">

                        <span class="login-input-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M4 6.5h16v11H4z"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="m4.5 7 7.5 6 7.5-6"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </span>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Email address"
                            required
                            autofocus
                            autocomplete="username"
                        >

                    </div>

                    @error('email')
                        <span class="login-error">
                            {{ $message }}
                        </span>
                    @enderror

                </div>


                <!-- Password -->
                <div class="login-field">

                    <div class="login-input-box">

                        <span class="login-input-icon">
                            <svg viewBox="0 0 24 24" fill="none">
                                <rect
                                    x="5"
                                    y="10"
                                    width="14"
                                    height="10"
                                    rx="2"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                />
                                <path
                                    d="M8 10V7a4 4 0 0 1 8 0v3"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </span>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required
                            autocomplete="current-password"
                        >

                        <button
                            type="button"
                            class="login-password-toggle"
                            id="passwordToggle"
                            aria-label="Show password"
                        >

                            <svg
                                id="eyeIcon"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <path
                                    d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                />

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="2.5"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                />
                            </svg>

                        </button>

                    </div>

                    @error('password')
                        <span class="login-error">
                            {{ $message }}
                        </span>
                    @enderror

                </div>


                <!-- Remember + Forgot -->
                <div class="login-options">

                    <label class="remember-option">

                        <input
                            id="remember_me"
                            type="checkbox"
                            name="remember"
                        >

                        <span class="custom-checkbox"></span>

                        <span>Remember me</span>

                    </label>


                    @if (Route::has('password.request'))

                        <a
                            href="{{ route('password.request') }}"
                            class="forgot-password"
                        >
                            Forgot password?
                        </a>

                    @endif

                </div>


                <!-- Login Button -->
                <button
                    type="submit"
                    class="login-submit"
                >
                    LOG IN
                </button>


                <!-- Register -->
                <div class="login-register">

                    <span>Don't have an account?</span>

                    <a href="{{ route('register') }}">
                        Create Account
                    </a>

                </div>

            </form>


            <!-- Back -->
            <a
                href="{{ url('/') }}"
                class="login-back"
            >
                ← Back to Cab-Chalak
            </a>

        </div>


        <!-- =========================================
             RIGHT ILLUSTRATION
        ========================================== -->

        <div class="login-illustration">

            <img
                src="{{ asset('assets/images/login-illustration.png') }}"
                alt="Cab-Chalak Travel"
            >

        </div>

    </div>


    <!-- Password Toggle -->
    <script>

        const passwordInput =
            document.getElementById('password');

        const passwordToggle =
            document.getElementById('passwordToggle');

        const eyeIcon =
            document.getElementById('eyeIcon');


        passwordToggle.addEventListener('click', function () {

            if (passwordInput.type === 'password') {

                passwordInput.type = 'text';

                passwordToggle.setAttribute(
                    'aria-label',
                    'Hide password'
                );

            } else {

                passwordInput.type = 'password';

                passwordToggle.setAttribute(
                    'aria-label',
                    'Show password'
                );

            }

        });

    </script>

</body>

</html>