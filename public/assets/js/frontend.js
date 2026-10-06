/* =========================================================
   CAB-CHALAK HOME PAGE
========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    /*
    |--------------------------------------------------------------------------
    | Trip Type Tabs
    |--------------------------------------------------------------------------
    */

    const tripTabs = document.querySelectorAll(".cc-trip-tab");

    tripTabs.forEach(function (tab) {

        tab.addEventListener("click", function () {

            tripTabs.forEach(function (item) {
                item.classList.remove("active");
            });

            this.classList.add("active");

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Swap Pickup / Drop
    |--------------------------------------------------------------------------
    */

    const swapButton = document.getElementById("ccSwapLocations");

    const pickupInput = document.getElementById("pickup_location");

    const dropInput = document.getElementById("drop_location");

    if (swapButton && pickupInput && dropInput) {

        swapButton.addEventListener("click", function () {

            const currentPickup = pickupInput.value;

            pickupInput.value = dropInput.value;

            dropInput.value = currentPickup;

        });

    }


    /*
    |--------------------------------------------------------------------------
    | Minimum Pickup Date
    |--------------------------------------------------------------------------
    */

    const pickupDate = document.getElementById("pickup_date");

    if (pickupDate) {

        const today = new Date();

        const year = today.getFullYear();

        const month = String(today.getMonth() + 1).padStart(2, "0");

        const day = String(today.getDate()).padStart(2, "0");

        pickupDate.min = `${year}-${month}-${day}`;

    }


    /*
    |--------------------------------------------------------------------------
    | FAQ Accordion
    |--------------------------------------------------------------------------
    */

    const faqQuestions =
        document.querySelectorAll(".cc-faq-question");

    faqQuestions.forEach(function (question) {

        question.addEventListener("click", function () {

            const currentItem =
                this.closest(".cc-home-faq-item");

            document
                .querySelectorAll(".cc-home-faq-item")
                .forEach(function (item) {

                    if (item !== currentItem) {
                        item.classList.remove("active");
                    }

                });

            currentItem.classList.toggle("active");

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Smooth Scroll
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('a[href^="#"]')
        .forEach(function (link) {

            link.addEventListener("click", function (event) {

                const targetId =
                    this.getAttribute("href");

                if (
                    targetId &&
                    targetId !== "#" &&
                    document.querySelector(targetId)
                ) {

                    event.preventDefault();

                    document
                        .querySelector(targetId)
                        .scrollIntoView({
                            behavior: "smooth",
                            block: "start"
                        });

                }

            });

        });


    /*
    |--------------------------------------------------------------------------
    | Search Form Demo
    |--------------------------------------------------------------------------
    */

    const searchForm =
        document.getElementById("ccHomeSearchForm");

    if (searchForm) {

        searchForm.addEventListener("submit", function (event) {

            event.preventDefault();

            const pickup =
                pickupInput ? pickupInput.value.trim() : "";

            const drop =
                dropInput ? dropInput.value.trim() : "";

            if (!pickup || !drop) {

                if (!pickup && pickupInput) {
                    pickupInput.focus();
                } else if (dropInput) {
                    dropInput.focus();
                }

                return;

            }

            /*
             * Actual cab-search route/database logic
             * will be connected later.
             */

            console.log(
                "Cab Search:",
                pickup,
                drop
            );

        });

    }

});

/* =========================================================
   CAB-CHALAK HOME PAGE V2 JS
========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    /* ---------------------------------------------------------
       BOOKING TABS
    --------------------------------------------------------- */

    /* ---------------------------------------------------------
   BOOKING TABS
--------------------------------------------------------- */

const bookingTabs = document.querySelectorAll('.cc2-booking-tab');

const returnDateField = document.getElementById(
    'cc2ReturnDateField'
);

const travelDateInput = document.getElementById(
    'cc2TravelDate'
);

const returnDateInput = document.getElementById(
    'cc2ReturnDate'
);
const searchForm = document.getElementById(
    'cc2SearchForm'
);



bookingTabs.forEach(function (tab) {

    tab.addEventListener('click', function () {

        /* ---------------------------------------------
           Active Tab
        --------------------------------------------- */

        bookingTabs.forEach(function (item) {
            item.classList.remove('active');
        });

        this.classList.add('active');


        /* ---------------------------------------------
           Check Selected Trip Type
        --------------------------------------------- */

        const bookingType =
            this.getAttribute('data-booking-tab');


        /* ---------------------------------------------
           ROUND TRIP
        --------------------------------------------- */

        if (bookingType === 'round-trip') {

            if (returnDateField) {
                returnDateField.style.display = 'block';
            }
            if (searchForm) {
                searchForm.classList.add('cc2-round-trip-active');
            }
            /* Return date cannot be before travel date */

            if (
                travelDateInput &&
                returnDateInput
            ) {

                if (travelDateInput.value) {

                    returnDateInput.min =
                        travelDateInput.value;

                }

            }

        }


        /* ---------------------------------------------
           ONE WAY
        --------------------------------------------- */

        else {

            if (returnDateField) {
                returnDateField.style.display = 'none';
            }

            if (returnDateInput) {
                returnDateInput.value = '';
            }

            if (searchForm) {
                searchForm.classList.remove(
                    'cc2-round-trip-active'
                );
            }

        }

    });

});


/* ---------------------------------------------------------
   TRAVEL DATE → RETURN DATE MINIMUM
--------------------------------------------------------- */

if (
    travelDateInput &&
    returnDateInput
) {

    travelDateInput.addEventListener(
        'change',
        function () {

            const selectedTravelDate =
                this.value;

            if (!selectedTravelDate) {
                return;
            }


            /* Return date cannot be before travel date */

            returnDateInput.min =
                selectedTravelDate;


            /* If selected return date is invalid,
               clear it */

            if (
                returnDateInput.value &&
                returnDateInput.value < selectedTravelDate
            ) {

                returnDateInput.value = '';

            }

        }
    );

}


    /* ---------------------------------------------------------
       SWAP PICKUP / DROP
    --------------------------------------------------------- */

    const swapButton = document.getElementById('cc2SwapLocation');

    if (swapButton) {

        swapButton.addEventListener('click', function () {

            const pickup = document.querySelector(
                '.cc2-search-form input[name="pickup"]'
            );

            const drop = document.querySelector(
                '.cc2-search-form input[name="drop"]'
            );

            if (!pickup || !drop) {
                return;
            }

            const temporaryValue = pickup.value;

            pickup.value = drop.value;
            drop.value = temporaryValue;

        });

    }


    /* ---------------------------------------------------------
       MIN TRAVEL DATE = TODAY
    --------------------------------------------------------- */

    const travelDate = document.getElementById('cc2TravelDate');

    if (travelDate) {

        const today = new Date();

        const year = today.getFullYear();

        const month = String(today.getMonth() + 1).padStart(2, '0');

        const day = String(today.getDate()).padStart(2, '0');

        travelDate.min = `${year}-${month}-${day}`;

    }


    /* ---------------------------------------------------------
       FAQ
    --------------------------------------------------------- */

    const faqItems = document.querySelectorAll('.cc2-faq-item');

    faqItems.forEach(function (item) {

        const question = item.querySelector('.cc2-faq-question');

        if (!question) {
            return;
        }

        question.addEventListener('click', function () {

            const isActive = item.classList.contains('active');

            faqItems.forEach(function (faq) {
                faq.classList.remove('active');
            });

            if (!isActive) {
                item.classList.add('active');
            }

        });

    });


    /* ---------------------------------------------------------
       COPY COUPON
    --------------------------------------------------------- */

    const copyButtons = document.querySelectorAll('.cc2-copy-code');

    copyButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            const code = this.getAttribute('data-code');

            if (!code) {
                return;
            }

            navigator.clipboard.writeText(code).then(() => {

                const originalText = this.innerText;

                this.innerText = 'Copied';

                setTimeout(() => {
                    this.innerText = originalText;
                }, 1500);

            }).catch(() => {

                alert('Coupon Code: ' + code);

            });

        });

    });


    /* ---------------------------------------------------------
       BOOKING DEMO
    --------------------------------------------------------- */

    const bookingDemoForm = document.querySelector('.cc2-search-form');

    if (bookingDemoForm) {

        bookingDemoForm.addEventListener('submit', function (event) {

            event.preventDefault();

            const pickup = this.querySelector(
                'input[name="pickup"]'
            )?.value.trim();

            const drop = this.querySelector(
                'input[name="drop"]'
            )?.value.trim();

            const date = this.querySelector(
                'input[name="date"]'
            )?.value;

            if (!pickup || !drop || !date) {

                alert(
                    'Please enter pickup location, destination and travel date.'
                );

                return;
            }

            alert(
                `Searching cabs from ${pickup} to ${drop}.`
            );

        });

    }

});

/* =========================================================
   CAB-CHALAK GOOGLE PLACES AUTOCOMPLETE
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const pickupInput = document.getElementById('cc2PickupLocation');
    const dropInput = document.getElementById('cc2DropLocation');

    if (!pickupInput && !dropInput) {
        return;
    }

    function setupGoogleAutocomplete(input) {

        if (!input) {
            return;
        }

        let suggestionBox = null;
        let debounceTimer = null;

        input.addEventListener('input', function () {

            const query = this.value.trim();

            clearTimeout(debounceTimer);

            if (query.length < 2) {
                removeSuggestions();
                return;
            }

            debounceTimer = setTimeout(() => {

                fetch(
                    `/google-maps/autocomplete?input=${encodeURIComponent(query)}`,
                    {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json'
                        }
                    }
                )
                .then(response => response.json())
                .then(result => {

                    removeSuggestions();

                    if (
                        !result.success ||
                        !result.data ||
                        !result.data.suggestions
                    ) {
                        return;
                    }

                    const suggestions =
                        result.data.suggestions;

                    if (!suggestions.length) {
                        return;
                    }

                    suggestionBox =
                        document.createElement('div');

                    suggestionBox.className =
                        'google-location-suggestions';

                    suggestions.forEach(item => {

                        const prediction =
                            item.placePrediction;

                        if (!prediction) {
                            return;
                        }

                        const mainText =
                            prediction.structuredFormat
                                ?.mainText?.text ||
                            prediction.text?.text ||
                            '';

                        const secondaryText =
                            prediction.structuredFormat
                                ?.secondaryText?.text ||
                            '';

                        const option =
                            document.createElement('button');

                        option.type = 'button';
                        option.className =
                            'google-location-option';

                        option.innerHTML = `
                            <span class="location-option-icon">
                                <svg viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">
                                    <path d="M12 21s7-5.2 7-11a7 7 0 1 0-14 0c0 5.8 7 11 7 11z"/>
                                    <circle cx="12" cy="10" r="2.5"/>
                                </svg>
                            </span>

                            <span class="location-option-text">
                                <strong>${escapeHtml(mainText)}</strong>
                                <small>${escapeHtml(secondaryText)}</small>
                            </span>
                        `;

                        option.addEventListener(
                            'click',
                            function () {

                                input.value =
                                    prediction.text?.text ||
                                    mainText;

                                input.dataset.placeId =
                                    prediction.placeId || '';

                                removeSuggestions();
                            }
                        );

                        suggestionBox.appendChild(option);
                    });

                    if (suggestionBox.children.length) {

                        const wrapper =
                            input.closest(
                                '.cc2-field-wrap'
                            ) ||
                            input.parentElement;

                        wrapper.style.position =
                            'relative';

                        wrapper.appendChild(
                            suggestionBox
                        );
                    }
                })
                .catch(error => {

                    console.error(
                        'Google Places error:',
                        error
                    );

                    removeSuggestions();
                });

            }, 300);
        });

        function removeSuggestions() {

            if (suggestionBox) {
                suggestionBox.remove();
                suggestionBox = null;
            }
        }

        document.addEventListener(
            'click',
            function (event) {

                if (
                    event.target !== input &&
                    suggestionBox &&
                    !suggestionBox.contains(event.target)
                ) {
                    removeSuggestions();
                }

            }
        );
    }

    function escapeHtml(value) {

        const div =
            document.createElement('div');

        div.textContent = value || '';

        return div.innerHTML;
    }

    setupGoogleAutocomplete(pickupInput);
    setupGoogleAutocomplete(dropInput);

});

/* =========================================================
   CAB-CHALAK ROUTE SEARCH
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const searchForm = document.getElementById('cc2SearchForm');

    if (!searchForm) {
        return;
    }

    searchForm.addEventListener('submit', function (event) {

        event.preventDefault();

        const pickupInput =
            document.getElementById('cc2PickupLocation');

        const dropInput =
            document.getElementById('cc2DropLocation');

        const searchButton =
            searchForm.querySelector('button[type="submit"]');

        if (!pickupInput || !dropInput) {
            return;
        }

        const pickupPlaceId =
            pickupInput.dataset.placeId || '';

        const dropPlaceId =
            dropInput.dataset.placeId || '';

        if (!pickupPlaceId) {
            alert('Please select a pickup location from the suggestions.');
            pickupInput.focus();
            return;
        }

        if (!dropPlaceId) {
            alert('Please select a drop location from the suggestions.');
            dropInput.focus();
            return;
        }

        if (searchButton) {
            searchButton.disabled = true;
            searchButton.innerHTML = 'Searching...';
        }

        fetch('/google-maps/route', {

            method: 'POST',

            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',

                'X-CSRF-TOKEN':
                    document.querySelector(
                        'meta[name="csrf-token"]'
                    ).getAttribute('content')
            },

            body: JSON.stringify({

                pickup_place_id: pickupPlaceId,

                drop_place_id: dropPlaceId

            })

        })

        .then(response => response.json())

        .then(result => {

            console.log('Google Routes Response:', result);

            if (!result.success) {

                console.error(result);

                alert(
                    'Unable to calculate route. Please try again.'
                );

                return;
            }

            const route =
                result.data?.routes?.[0];

            if (!route) {

                alert(
                    'No route found between these locations.'
                );

                return;
            }

            const distanceKm =
                (route.distanceMeters / 1000).toFixed(1);

            const duration =
                route.duration || '';

            console.log(
                'Distance:',
                distanceKm,
                'KM'
            );

            console.log(
                'Duration:',
                duration
            );

            /*
             * Temporary test result.
             * Later we will send these values
             * to the cab listing page.
             */

            alert(
                `Route found!\n\nDistance: ${distanceKm} KM\nTravel Time: ${duration}`
            );

        })

        .catch(error => {

            console.error(
                'Route API error:',
                error
            );

            alert(
                'Something went wrong while calculating the route.'
            );

        })

        .finally(() => {

            if (searchButton) {

                searchButton.disabled = false;

                searchButton.innerHTML =
                    'Search Cabs <span>→</span>';
            }

        });

    });

});
/* =========================================================
   FINAL CAB SEARCH
   Pickup + Drop + Date + Google Route
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('cc2SearchForm');

    if (!form) {
        return;
    }

    form.addEventListener('submit', function (event) {

        // Existing search handler ko stop karo
        event.preventDefault();
        event.stopImmediatePropagation();

        const pickupInput =
            document.getElementById('cc2PickupLocation');

        const dropInput =
            document.getElementById('cc2DropLocation');

        const dateInput =
            document.getElementById('cc2TravelDate');

        const button =
            form.querySelector('button[type="submit"]');

        if (!pickupInput || !dropInput || !dateInput) {
            return;
        }

        const pickup =
            pickupInput.value.trim();

        const drop =
            dropInput.value.trim();

        const travelDate =
            dateInput.value.trim();
        
        const activeBookingTab = document.querySelector(
            '.cc2-booking-tab.active'
        );

        const bookingType = activeBookingTab
            ? activeBookingTab.getAttribute('data-booking-tab')
            : 'one-way';

        const returnDateInput = document.getElementById(
            'cc2ReturnDate'
        );

        const returnDate = returnDateInput
            ? returnDateInput.value.trim()
            : '';

        const pickupPlaceId =
            pickupInput.dataset.placeId || '';

        const dropPlaceId =
            dropInput.dataset.placeId || '';

        if (!pickup) {
            alert('Please select pickup location.');
            pickupInput.focus();
            return;
        }

        if (!drop) {
            alert('Please select drop location.');
            dropInput.focus();
            return;
        }

        if (!travelDate) {
            alert('Please select travel date.');
            dateInput.focus();
            return;
        }

        if (
            bookingType === 'round-trip' &&
            !returnDate
        ) {
            alert('Please select return date.');
            returnDateInput?.focus();
            return;
        }

        if (!pickupPlaceId || !dropPlaceId) {
            alert(
                'Please select both locations from Google suggestions.'
            );
            return;
        }

        if (button) {
            button.disabled = true;
            button.innerHTML = 'Searching...';
        }

        fetch('/google-maps/route', {

            method: 'POST',

            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN':
                    document.querySelector(
                        'meta[name="csrf-token"]'
                    ).getAttribute('content')
            },

            body: JSON.stringify({
                pickup_place_id: pickupPlaceId,
                drop_place_id: dropPlaceId
            })

        })
        .then(response => response.json())

        .then(result => {

            if (!result.success) {
                throw new Error('Route API failed.');
            }

            const route =
                result.data?.routes?.[0];

            if (!route) {
                throw new Error('No route found.');
            }

            const distanceKm =
                (route.distanceMeters / 1000).toFixed(1);

            const durationSeconds =
                parseInt(
                    route.duration?.replace('s', '') || 0
                );

            const hours =
                Math.floor(durationSeconds / 3600);

            const minutes =
                Math.round(
                    (durationSeconds % 3600) / 60
                );

            let durationText = '';

            if (hours > 0) {
                durationText += `${hours}h `;
            }

            durationText += `${minutes}m`;

            const params = new URLSearchParams({

            pickup: pickup,

            drop: drop,

            date: travelDate,

            trip_type:
                bookingType === 'round-trip'
                    ? 'round_trip'
                    : 'one_way',

            return_date:
                bookingType === 'round-trip'
                    ? returnDate
                    : '',

            pickup_place_id: pickupPlaceId,

            drop_place_id: dropPlaceId,

            distance: distanceKm,

            duration: durationText
        });

            window.location.href =
                `/cabs?${params.toString()}`;

        })

        .catch(error => {

            console.error(
                'Cab search error:',
                error
            );

            alert(
                'Unable to find route. Please try again.'
            );

        })

        .finally(() => {

            if (button) {
                button.disabled = false;
                button.innerHTML =
                    'Search Cabs <span>→</span>';
            }

        });

    }, true);

});
/* =========================================================
   BOOKING PAGE - TRIP TYPE + RETURN DATE
   ========================================================= */
/* =========================================================
   BOOKING PAGE - TRIP TYPE + RETURN DATE + FARE
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const tripOptions = document.querySelectorAll(
        'input[name="trip_type"]'
    );

    const returnDateField = document.getElementById(
        'returnDateField'
    );

    const returnDateInput = document.getElementById(
        'returnDate'
    );

    const continueBookingBtn = document.getElementById(
        'continueBookingBtn'
    );

    const fareData = document.getElementById(
        'fareData'
    );

    const totalFareAmount = document.getElementById(
        'totalFareAmount'
    );

    const partPaymentAmount = document.getElementById(
        'partPaymentAmount'
    );

    const remainingAmount = document.getElementById(
        'remainingAmount'
    );

    if (!tripOptions.length || !fareData) {
        return;
    }

    const oneWayFare = parseFloat(
        fareData.dataset.oneWayFare || 0
    );

    const roundTripFareFromCab = parseFloat(
        fareData.dataset.roundTripFare || 0
    );

    const partPaymentPercent = parseFloat(
        fareData.dataset.partPaymentPercent || 0
    );


    function calculateFare(tripType) {

        let fare = oneWayFare;

        if (tripType === 'round_trip') {

            if (roundTripFareFromCab > 0) {

                fare = roundTripFareFromCab;

            } else {

                fare = oneWayFare * 2;

            }

        }

        fare = Math.round(fare);

        const partPayment = Math.round(
            fare * (partPaymentPercent / 100)
        );

        const remaining = fare - partPayment;

        return {
            fare: fare,
            partPayment: partPayment,
            remaining: remaining
        };
    }


    function updateFareUI() {

        const selectedTrip = document.querySelector(
            'input[name="trip_type"]:checked'
        );

        if (!selectedTrip) {
            return;
        }

        const tripType = selectedTrip.value;

        const fare = calculateFare(tripType);


        if (totalFareAmount) {

            totalFareAmount.textContent =
                '₹' + fare.fare.toLocaleString('en-IN');

        }


        if (partPaymentAmount) {

            partPaymentAmount.textContent =
                '₹' + fare.partPayment.toLocaleString('en-IN');

        }


        if (remainingAmount) {

            remainingAmount.textContent =
                '₹' + fare.remaining.toLocaleString('en-IN');

        }


        updateBookingUrl(
            tripType,
            fare
        );
    }


    function updateBookingUrl(tripType, fare) {

        if (!continueBookingBtn) {
            return;
        }

        const url = new URL(
            continueBookingBtn.href,
            window.location.origin
        );


        url.searchParams.set(
            'trip_type',
            tripType
        );


        url.searchParams.set(
            'fare',
            fare.fare
        );


        url.searchParams.set(
            'part_payment',
            fare.partPayment
        );


        url.searchParams.set(
            'remaining',
            fare.remaining
        );


        if (
            tripType === 'round_trip' &&
            returnDateInput &&
            returnDateInput.value
        ) {

            url.searchParams.set(
                'return_date',
                returnDateInput.value
            );

        } else {

            url.searchParams.delete(
                'return_date'
            );

        }


        continueBookingBtn.href =
            url.toString();
    }


    function updateTripTypeUI() {

        const selectedTrip = document.querySelector(
            'input[name="trip_type"]:checked'
        );

        if (!selectedTrip) {
            return;
        }


        if (selectedTrip.value === 'round_trip') {

            if (returnDateField) {

                returnDateField.style.display =
                    'block';

            }

        } else {

            if (returnDateField) {

                returnDateField.style.display =
                    'none';

            }

        }


        updateFareUI();
    }


    tripOptions.forEach(function (radio) {

        radio.addEventListener(
            'change',
            function () {

                updateTripTypeUI();

            }
        );

    });


    if (returnDateInput) {

        returnDateInput.addEventListener(
            'change',
            function () {

                const selectedTrip =
                    document.querySelector(
                        'input[name="trip_type"]:checked'
                    );

                if (!selectedTrip) {
                    return;
                }

                const fare =
                    calculateFare(
                        selectedTrip.value
                    );

                updateBookingUrl(
                    selectedTrip.value,
                    fare
                );

            }
        );

    }


    updateTripTypeUI();

});
/* =========================================================
   AIRPORT TRANSFER + HOURLY RENTAL UI SWITCH
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const bookingTabs = document.querySelectorAll(
        '.cc2-booking-tab'
    );

    const airportFields = document.getElementById(
        'cc2AirportFields'
    );

    const hourlyFields = document.getElementById(
        'cc2HourlyFields'
    );

    const pickupField = document
        .getElementById('cc2PickupLocation')
        ?.closest('.cc2-field');

    const dropField = document
        .getElementById('cc2DropLocation')
        ?.closest('.cc2-field');

    const travelDateField = document
        .getElementById('cc2TravelDate')
        ?.closest('.cc2-field');

    const returnDateField = document.getElementById(
        'cc2ReturnDateField'
    );

    const swapButton = document.getElementById(
        'cc2SwapLocation'
    );


    function updateBookingMode(mode) {

        const searchForm = document.getElementById('cc2SearchForm');

            if (searchForm) {
                searchForm.classList.remove(
                    'cc2-airport-active',
                    'cc2-hourly-active'
                );

                if (mode === 'airport') {
                    searchForm.classList.add('cc2-airport-active');
                }

                if (mode === 'hourly') {
                    searchForm.classList.add('cc2-hourly-active');
                }
            }

        const specialMode =
            mode === 'airport' ||
            mode === 'hourly';


        /* -----------------------------------------
           Normal One Way / Round Trip fields
        ----------------------------------------- */

        if (pickupField) {
            pickupField.style.display =
                specialMode ? 'none' : '';
        }

        if (dropField) {
            dropField.style.display =
                specialMode ? 'none' : '';
        }

        if (travelDateField) {
            travelDateField.style.display =
                specialMode ? 'none' : '';
        }

        if (swapButton) {
            swapButton.style.display =
                specialMode ? 'none' : '';
        }


        /* -----------------------------------------
           Return Date
        ----------------------------------------- */

        if (mode === 'one-way') {

            if (returnDateField) {
                returnDateField.style.display = 'none';
            }

        } else if (mode === 'round-trip') {

            /*
             * Existing Round Trip JS handles
             * the return-date field.
             */

        } else {

            if (returnDateField) {
                returnDateField.style.display = 'none';
            }

        }


        /* -----------------------------------------
           Airport Transfer
        ----------------------------------------- */

        if (airportFields) {

            airportFields.style.display =
                mode === 'airport'
                    ? 'contents'
                    : 'none';

        }


        /* -----------------------------------------
           Hourly Rental
        ----------------------------------------- */

        if (hourlyFields) {

            hourlyFields.style.display =
                mode === 'hourly'
                    ? 'contents'
                    : 'none';

        }

    }


    /* -----------------------------------------
       Tab Click
    ----------------------------------------- */

    bookingTabs.forEach(function (tab) {

        tab.addEventListener('click', function () {

            const mode =
                tab.getAttribute('data-booking-tab');

            updateBookingMode(mode);

        });

    });


    /* -----------------------------------------
       Initial State
    ----------------------------------------- */

    const activeTab = document.querySelector(
        '.cc2-booking-tab.active'
    );

    if (activeTab) {

        const initialMode =
            activeTab.getAttribute('data-booking-tab');

        updateBookingMode(initialMode);

    }

});

/* =========================================================
   MOBILE NAVBAR MENU
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const mobileMenuBtn = document.querySelector(
        '.mobile-menu-btn'
    );

    const mainNav = document.querySelector(
        '.main-nav'
    );

    if (!mobileMenuBtn || !mainNav) {
        return;
    }

    mobileMenuBtn.addEventListener('click', function () {

        mainNav.classList.toggle('mobile-open');

        mobileMenuBtn.classList.toggle('active');

    });

});