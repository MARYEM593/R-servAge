<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HotelController::class, 'index'])->name('index');
Route::get('/PageAddHotel', [HotelController::class, 'PageAddHotel'])->name('hotels.create');
Route::post('/AddHotel', [HotelController::class, 'AddHotel'])->name('hotels.store');

