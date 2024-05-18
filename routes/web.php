<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BookingController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/register', [CustomAuthController::class, 'home'])->name('home');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
// for getting booking page
Route::get('booking', [CustomAuthController::class, 'booking'])->name('booking');
Route::POST('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::POST('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
// new
Route::get('/dashboard/{user}/edit', [CustomAuthController::class, 'edit'])->name('users.edit');
Route::put('/dashboard/{user}', [CustomAuthController::class, 'update'])->name('users.update');
Route::delete('/dashboard/{user}', [CustomAuthController::class, 'destroy'])->name('users.destroy');
// for template navigation
Route::get('/', [CustomAuthController::class, 'index'])->name('index');
Route::get('/packages', [CustomAuthController::class, 'packages'])->name('packages');
Route::get('/contact', [CustomAuthController::class, 'contact'])->name('contact');
// for store booking
Route::post('/', [BookingController::class, 'store'])->name('bookings.save');
// for edit , del booking 
Route::get('/booking/{booking}/editbooking', [CustomAuthController::class, 'editbooking'])->name('bookings.edit');
Route::put('/booking/{booking}', [CustomAuthController::class, 'updatebooking'])->name('bookings.update');
Route::delete('/booking/{booking}', [CustomAuthController::class, 'destroybooking'])->name('bookings.destroy');