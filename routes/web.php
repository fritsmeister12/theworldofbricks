<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
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

Route::resource('products', ProductController::class);

// Pages >-----------------<
Route::get('/over-ons', function () {
    return view('pages.about-us');
})->name('over-ons');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
// End Pages >-----------------<

// Auth
Route::get('/aanmelden', [RegisterController::class, 'index'])->name('register');
Route::post('/aanmelden', [RegisterController::class, 'store']);

Route::get('/log-in', [LoginController::class, 'index'])->name('login');
Route::post('/log-in', [LoginController::class, 'store']);

Route::get('/log-uit', [LogoutController::class, 'index'])->name('logout');
// End Auth

// Payment
Route::get('/prijzen', 'SubscriptionController@index')->name('prijzen');
Route::post('/checkout', 'SubscriptionController@checkout')->name('checkout')->middleware('auth');
Route::get('/succes', 'SubscriptionController@succes')->name('succes')->middleware('auth');

Route::get('/annuleren', function () {
    return view('subscriptions.cancel');
})->name('annuleren');
// 

// Profile
Route::get('/profiel', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

Route::post('/afrekenen', [CheckoutController::class, 'index'])->name('order')->middleware('auth');
