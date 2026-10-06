@extends('frontend.layouts.app')

@section('title', 'Booking Confirmed | Cab-Chalak')

@section('content')

<section class="cabs-page">

    <div class="container">

        <div style="
            max-width: 700px;
            margin: 70px auto;
            background: #ffffff;
            border: 1px solid #e5eef3;
            border-radius: 20px;
            padding: 45px 30px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(7, 26, 43, 0.08);
        ">

            <div style="
                width: 70px;
                height: 70px;
                margin: 0 auto 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                background: #eafaf0;
                color: #16a34a;
                font-size: 34px;
            ">
                ✓
            </div>

            <h1 style="
                margin-bottom: 10px;
                color: #102a43;
            ">
                Booking Confirmed!
            </h1>

            <p style="
                color: #64748b;
                margin-bottom: 25px;
            ">
                Your cab booking has been successfully submitted.
            </p>

            <div style="
                background: #f7fbfd;
                border-radius: 12px;
                padding: 18px;
                margin-bottom: 25px;
            ">

                <small>Booking Reference</small>

                <h2 style="
                    margin: 5px 0 0;
                    color: #ff6b00;
                    letter-spacing: 1px;
                ">
                    {{ $booking->booking_reference }}
                </h2>

            </div>

            <p>
                <strong>{{ $cab->name }}</strong>
            </p>

            <p>
                {{ $booking->pickup_location }}
                →
                {{ $booking->drop_location }}
            </p>

            <p>
                Total Fare:
                <strong>
                    ₹{{ number_format((float) $booking->total_fare) }}
                </strong>
            </p>

            <a
                href="{{ url('/') }}"
                class="cab-book-btn"
                style="max-width: 220px; margin: 20px auto 0;"
            >
                Back to Home
            </a>

        </div>

    </div>

</section>

@endsection