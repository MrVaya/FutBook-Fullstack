<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FutsalController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/Contact-us.html', function () {
    return redirect()->route('contact');
});
Route::post('/contact', [FrontendController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');
Route::get('/policy', [FrontendController::class, 'policy'])->name('policy');
Route::get('/futsal-details/{id}', [FrontendController::class, 'futsalDetails'])->name('futsal.details');
Route::get('/get-time-slots', [FrontendController::class, 'getTimeSlots'])->name('get.time.slots');
Route::get('/confirm-booking', [FrontendController::class, 'confirmBooking'])->name('confirm.booking');
Route::get('/booking-success', [FrontendController::class, 'bookingSuccess'])->name('booking.success');
Route::get('/futsal-venue', function () {
    return view('layouts.frontendCode.futsal-venue');
})->name('futsal-venue');

// Debug Route to display Futsal IDs
Route::get('/debug-futsal-ids', [FrontendController::class, 'debugFutsalIds']);

// Protected Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('dashboard');
    Route::resource('items', ItemController::class);
    Route::resource('futsals', FutsalController::class);
    Route::resource('bookings', BookingController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
