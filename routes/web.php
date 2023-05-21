<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
use App\Models\Airline;
use App\Models\City;
use App\Models\Flights;

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
    $cities = City::all();
    return view('home',['cities'=>$cities]);
});

Route::get('/book', function(){
    return view('book');
});

Route::post('/book', [FlightController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/adminLogin', [UserController::class, 'admin_login']);
Route::get('/index', [UserController::class, 'home']);
Route::get('/add_flight', [UserController::class, 'add_flight']);
Route::get('/all_airlines', [UserController::class, 'all_airlines']);
Route::get('/all_flights', [UserController::class, 'all_flights']);
Route::post('/add_airline', [UserController::class, 'add_airline']);
Route::post('/add_flight', [UserController::class, 'new_flight']);
Route::post('/flights_result', [UserController::class, 'flights_result']);
Route::post('/pass_form', [FlightController::class, 'pass_form']);
Route::post('/pass_detail', [FlightController::class, 'pass_detail']);
