<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\TripTypeController;

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
    return view('backend.layout.index');
});
Route::prefix('admin')->group(function () {
    Route::get('user',[UserController::class,'User' ])->name('users.index');
    Route::get('user/delete/{id}',[UserController::class,'delete' ])->name('user.delete');

    Route::get('province',[ProvinceController::class,'Province' ])->name('provinces.index');
    Route::get('province/create',[ProvinceController::class,'create' ])->name('province.create');
    Route::post('province/add',[ProvinceController::class,'store' ])->name('province.add');

    Route::get('city',[CityController::class,'City' ])->name('cities.index');
    Route::get('location',[LocationController::class,'Location' ])->name('locations.index');
    Route::get('hotel',[HotelController::class,'Hotel' ])->name('hotels.index');
    Route::get('trip',[TripController::class,'Trip' ])->name('trips.index');
    Route::get('triptype',[TripTypeController::class,'TripType' ])->name('triptypes.index');

});
