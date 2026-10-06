<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GoogleMapsController;
use App\Http\Controllers\CabController;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('frontend.home2');
});
Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

// Route::get('/cabs', function () {
//     return view('frontend.cabs.index');
// })->name('cabs.index');
Route::get('/cabs', [CabController::class, 'index'])
    ->name('cabs.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

    });


/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

Route::get('/google-maps-test', [GoogleMapsController::class, 'test'])
    ->name('google.maps.test');

Route::get('/google-maps/autocomplete', [GoogleMapsController::class, 'autocomplete'])
    ->name('google.maps.autocomplete');

Route::post('/google-maps/route', [GoogleMapsController::class, 'route'])
    ->name('google.maps.route');

// Route::get('/booking/{cab}', [BookingController::class, 'create'])
//     ->name('booking.create');

// Route::get('/booking/{cab}/passenger-details', [BookingController::class, 'passengerDetails'])
//     ->name('booking.passenger');

// Route::post('/booking/store', [BookingController::class, 'store'])
//     ->name('booking.store');

// Route::get('/my-bookings', [BookingController::class, 'myBookings'])
//     ->name('booking.my');

// Route::get('/booking/track', [BookingController::class, 'track'])
//     ->name('booking.track');

// Route::post('/booking/{booking}/cancel', [BookingController::class, 'cancel'])
//     ->name('booking.cancel');

Route::get('/booking/track', [BookingController::class, 'track'])
    ->name('booking.track');

Route::get('/booking/{cab}', [BookingController::class, 'create'])
    ->name('booking.create');

Route::get('/booking/{cab}/passenger-details', [BookingController::class, 'passengerDetails'])
    ->name('booking.passenger');

Route::post('/booking/store', [BookingController::class, 'store'])
    ->name('booking.store');

Route::get('/my-bookings', [BookingController::class, 'myBookings'])
    ->name('booking.my');

Route::post('/booking/{booking}/cancel', [BookingController::class, 'cancel'])
    ->name('booking.cancel');


require __DIR__.'/auth.php';