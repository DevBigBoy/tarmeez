<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsTarmeezUser;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/almasa', function () {
//     return view('hello', ['name' => 'ali', 'value' => 21]);
// });

// Route::get('/myBookings', 'App\Http\Controllers\Controller@myBookings', 'myBookings');

Route::get('/myBookings', [BookingController::class, 'myBookings']);
Route::get('/sayhello/{name}', BookingController::class . '@sayHello')->middleware(IsTarmeezUser::class)->name('sayhello');

Route::get('/product', [BookingController::class, 'show']);
Route::get('/login', [BookingController::class, 'login'])->name('login');