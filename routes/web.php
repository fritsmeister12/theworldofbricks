<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('producten', ProductController::class);

// Pages >-----------------<
Route::get('/over-ons', function () {
    return view('pages.about-us');
})->name('over-ons');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/terms-of-services', function () {
    return view('pages.tos');
})->name('tos');
// End Pages >-----------------<

Route::resource('verkoop', SellController::class);

// Auth
Route::get('/aanmelden', [RegisterController::class, 'index'])->name('register');
Route::post('/aanmelden', [RegisterController::class, 'store']);

Route::get('/log-in', [LoginController::class, 'index'])->name('login');
Route::post('/log-in', [LoginController::class, 'store']);

Route::get('/log-uit', [LogoutController::class, 'index'])->name('logout');
// End Auth

// Payment

Route::get('/prijzen', 'SubscriptionController@index')->name('prijzen');
Route::post('/checkout', 'SubscriptionController@checkout')->name('checkout');
Route::get('/succes', 'SubscriptionController@succes')->name('succes');

Route::get('/pay', 'CheckoutController@pay')->name('pay');
Route::post('/pay-proceed', 'CheckoutController@pay')->name('payProceed');


Route::get('/annuleren', function () {
    return view('subscriptions.cancel');
})->name('annuleren');
// 

// Profile
Route::get('/profiel', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

Route::post('/afrekenen', [CheckoutController::class, 'index'])->name('order')->middleware('auth');
