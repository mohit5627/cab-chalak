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

    const bookingTabs = document.querySelectorAll('.cc2-booking-tab');

    bookingTabs.forEach(function (tab) {

        tab.addEventListener('click', function () {

            bookingTabs.forEach(function (item) {
                item.classList.remove('active');
            });

            this.classList.add('active');

        });

    });


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

    const searchForm = document.querySelector('.cc2-search-form');

    if (searchForm) {

        searchForm.addEventListener('submit', function (event) {

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
