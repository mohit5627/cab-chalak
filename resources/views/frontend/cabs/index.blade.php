@extends('frontend.layouts.app')

@section('title', 'Available Cabs | Cab-Chalak')

@section('content')
@php
    $pickup = request('pickup', 'Jaipur');
    $drop = request('drop', 'Ajmer');
    $travelDate = request('date');

    $distance = request('distance');
    $duration = request('duration');

    if ($travelDate) {
        try {
            $formattedDate = \Carbon\Carbon::parse($travelDate)->format('d M Y');
        } catch (\Exception $e) {
            $formattedDate = $travelDate;
        }
    } else {
        $formattedDate = 'Select Date';
    }
@endphp

<section class="cabs-page">

    <div class="cabs-page-header">
        <div class="container">
            <h1>Available Cabs</h1>
            <p>Choose your preferred cab for your journey.</p>
        </div>
    </div>

    <div class="container">

        <div class="cabs-search-bar">

            <div class="search-field">
                <small>Pickup Location</small>
                <strong>{{ $pickup }}</strong>
            </div>

            <div class="search-field">
                <small>Drop Location</small>
                <strong>{{ $drop }}</strong>
            </div>

            <div class="search-field">
                <small>Travel Date</small>
                <strong>{{ $formattedDate }}</strong>
            </div>

            <button type="button" class="cabs-search-btn">
                Search Cabs
            </button>

        </div>

        <div class="cabs-layout">

            {{-- Filters --}}
            <aside class="cabs-filter">

                <form method="GET" action="{{ route('cabs.index') }}" id="cabFilterForm">

                    {{-- Preserve Search Data --}}
                    <input type="hidden" name="pickup" value="{{ request('pickup') }}">
                    <input type="hidden" name="drop" value="{{ request('drop') }}">
                    <input type="hidden" name="date" value="{{ request('date') }}">
                    <input type="hidden" name="pickup_place_id" value="{{ request('pickup_place_id') }}">
                    <input type="hidden" name="drop_place_id" value="{{ request('drop_place_id') }}">
                    <input type="hidden" name="distance" value="{{ request('distance') }}">
                    <input type="hidden" name="duration" value="{{ request('duration') }}">

                    <div class="filter-heading">
                        <h3>Filter</h3>

                        <a href="{{ route('cabs.index', request()->only([
                            'pickup',
                            'drop',
                            'date',
                            'pickup_place_id',
                            'drop_place_id',
                            'distance',
                            'duration'
                        ])) }}">
                            Reset
                        </a>
                    </div>


                    {{-- Cab Type --}}
                    <div class="filter-group">

                        <h4>Cab Type</h4>

                        @foreach($typeCounts as $type => $count)

                            <label>

                                <input
                                    type="checkbox"
                                    name="type[]"
                                    value="{{ $type }}"
                                    {{ in_array($type, request('type', [])) ? 'checked' : '' }}
                                    onchange="this.form.submit()"
                                >

                                {{ $type }}

                                <span>{{ $count }}</span>

                            </label>

                        @endforeach

                    </div>


                    {{-- Fuel Type --}}
                    <div class="filter-group">

                        <h4>Fuel Type</h4>

                        @foreach($fuelCounts as $fuel => $count)

                            <label>

                                <input
                                    type="checkbox"
                                    name="fuel[]"
                                    value="{{ $fuel }}"
                                    {{ in_array($fuel, request('fuel', [])) ? 'checked' : '' }}
                                    onchange="this.form.submit()"
                                >

                                {{ $fuel }}

                                <span>{{ $count }}</span>

                            </label>

                        @endforeach

                    </div>


                    {{-- Features --}}
                    <div class="filter-group">

                        <h4>Features</h4>

                        <label>

                            <input
                                type="checkbox"
                                name="ac"
                                value="1"
                                {{ request('ac') == '1' ? 'checked' : '' }}
                                onchange="this.form.submit()"
                            >

                            AC

                            <span>{{ $acCount }}</span>

                        </label>

                    </div>

                </form>

            </aside>

            {{-- Cab Listings --}}
            <div class="cabs-list">

                <div class="cabs-list-top">
                    <div>
                        <h2>Available Cabs</h2>
                        <p>{{ $cabs->count() }} cabs available for your journey</p>
                    </div>

                    <select
                        onchange="window.location.href = this.value"
                    >
                        <option
                            value="{{ request()->fullUrlWithQuery(['sort' => 'recommended']) }}"
                            {{ request('sort', 'recommended') == 'recommended' ? 'selected' : '' }}
                        >
                            Sort by Recommended
                        </option>

                        <option
                            value="{{ request()->fullUrlWithQuery(['sort' => 'price_low']) }}"
                            {{ request('sort') == 'price_low' ? 'selected' : '' }}
                        >
                            Price: Low to High
                        </option>

                        <option
                            value="{{ request()->fullUrlWithQuery(['sort' => 'price_high']) }}"
                            {{ request('sort') == 'price_high' ? 'selected' : '' }}
                        >
                            Price: High to Low
                        </option>
                    </select>
                </div>

                {{-- Cab Card --}}
                {{-- Dynamic Cab Cards --}}
                @forelse($cabs as $cab)

                    @php
                        $distanceValue = is_numeric($distance) ? (float) $distance : 0;

                        $minimumKm = (float) ($cab->minimum_km ?? 0);

                        $rate = (float) ($cab->extra_km_rate ?? 0);

                        if ($rate <= 0) {
                            $rate = (float) ($cab->per_km_rate ?? 0);
                        }

                        if ($distanceValue > 0) {
                            $fare = (float) $cab->base_fare
                                + max($distanceValue - $minimumKm, 0) * $rate;
                        } else {
                            $fare = (float) $cab->base_fare;
                        }

                        $fare = round($fare);

                        $partPaymentPercent = (float) ($cab->part_payment_percent ?? 0);

                        $partPayment = round(
                            $fare * ($partPaymentPercent / 100)
                        );
                    @endphp

                    <div class="cab-card">

                        {{-- Cab Image --}}
                        <div class="cab-image">

                            <img
                                src="{{ $cab->image
                                    ? asset('storage/' . $cab->image)
                                    : asset('assets/images/route-jodhpur.png') }}"
                                alt="{{ $cab->name }}"
                            >

                        </div>


                        {{-- Cab Details --}}
                        <div class="cab-details">

                            <h3>{{ $cab->name }}</h3>

                            <div class="cab-meta">

                                <span>{{ $cab->type }}</span>

                                <b>{{ $cab->seats }} Seats</b>

                                <b>{{ $cab->luggage }} Luggage</b>

                                @if($cab->ac)
                                    <b>AC</b>
                                @endif

                            </div>


                            <div class="cab-features">

                                    {{-- Distance --}}
                                    <div>
                                        <strong>◷ Kilometer Charges</strong>

                                        <p>
                                            @if($distanceValue > 0)
                                                {{ number_format($distanceValue, 1) }} km route distance
                                            @else
                                                Distance calculated by Google
                                            @endif
                                        </p>
                                    </div>


                                    {{-- Fuel --}}
                                    <div>
                                        <strong>⛽ Fuel Type</strong>

                                        <p>
                                            {{ $cab->fuel_type }}
                                        </p>
                                    </div>


                                    {{-- Travel Time --}}
                                    <div>
                                        <strong>◷ Travel Time</strong>

                                        <p>
                                            {{ $duration ?: 'Travel time calculated by Google' }}
                                        </p>
                                    </div>


                                    {{-- Cancellation --}}
                                    <div>
                                        <strong>✓ Cancellation Policy</strong>

                                        <p>
                                            {{ $cab->cancellation_policy ?: 'Standard cancellation policy.' }}
                                        </p>
                                    </div>


                                    {{-- Part Payment --}}
                                    <div>
                                        <strong>₹ Part Payment</strong>

                                        <p>
                                            @if($partPaymentPercent > 0)
                                                Pay ₹{{ number_format($partPayment) }}
                                                now ({{ rtrim(rtrim(number_format($partPaymentPercent, 2), '0'), '.') }}%)
                                            @else
                                                Full payment required.
                                            @endif
                                        </p>
                                    </div>

                                </div>

                            </div>


                            {{-- Cab Price --}}
                            <div class="cab-price">

                                <small>Starting from</small>

                                <strong>
                                    ₹{{ number_format($fare) }}
                                </strong>

                                <a
                                href="{{ route('booking.create', [
                                    'cab' => $cab->id,
                                    'pickup' => $pickup,
                                    'drop' => $drop,
                                    'date' => $travelDate,

                                    'trip_type' => request('trip_type', 'one_way'),
                                    'return_date' => request('return_date'),

                                    'pickup_place_id' => request('pickup_place_id'),
                                    'drop_place_id' => request('drop_place_id'),
                                    'distance' => $distance,
                                    'duration' => $duration,
                                ]) }}"
                                class="cab-book-btn"
                            >
                                Book Now
                            </a>

                                <a href="#">
                                    More Options →
                                </a>

                            </div>

                        </div>

                    @empty

                        <div class="cab-card">

                            <div class="cab-details">

                                <h3>No Cabs Available</h3>

                                <p>
                                    Sorry, no cab is currently available for this route.
                                </p>

                            </div>

                        </div>

                    @endforelse

            </div>

        </div>

    </div>

</section>

@endsection