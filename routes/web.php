<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\TripTypeController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\TripFeatureController;

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
    Route::get('user/create',[UserController::class,'create' ])->name('user.create');
    Route::post('user/add',[UserController::class,'store' ])->name('user.add');


    Route::get('province',[ProvinceController::class,'Province' ])->name('provinces.index');
    Route::get('province/delete/{id}',[ProvinceController::class,'delete' ])->name('province.delete');
    Route::get('province/create',[ProvinceController::class,'create' ])->name('province.create');
    Route::post('province/add',[ProvinceController::class,'store' ])->name('province.add');

    Route::get('city',[CityController::class,'City' ])->name('cities.index');
    Route::get('city/delete/{id}',[CityController::class,'delete' ])->name('city.delete');
    Route::get('city/create',[CityController::class,'create' ])->name('city.create');
    Route::post('city/add',[CityController::class,'store' ])->name('city.add');
    Route::get('city/edit/{id}',[CityController::class,'edit' ])->name('city.edit');
    Route::post('city/update',[CityController::class,'update' ])->name('city.update');



    Route::get('location',[LocationController::class,'Location' ])->name('locations.index');
    Route::get('location/delete/{id}',[LocationController::class,'delete' ])->name('location.delete');
    Route::get('location/create',[LocationController::class,'create' ])->name('location.create');
    Route::post('location/add',[LocationController::class,'store' ])->name('location.add');


    Route::get('hotel',[HotelController::class,'Hotel' ])->name('hotels.index');
    Route::get('hotel/delete/{id}',[HotelController::class,'delete' ])->name('hotel.delete');
    Route::get('hotel/create',[HotelController::class,'create' ])->name('hotel.create');
    Route::post('hotel/add',[HotelController::class,'store' ])->name('hotel.add');


    Route::get('trip',[TripController::class,'Trip' ])->name('trips.index');
    Route::get('trip/delete/{id}',[TripController::class,'delete' ])->name('trip.delete');
    Route::get('trip/create',[TripController::class,'create' ])->name('trip.create');
    Route::post('trip/add',[TripController::class,'store' ])->name('trip.add');


    Route::get('triptype',[TripTypeController::class,'TripType' ])->name('triptypes.index');
    Route::get('triptype/delete/{id}',[TripTypeController::class,'delete' ])->name('triptype.delete');
    Route::get('triptype/create',[TripTypeController::class,'create' ])->name('triptype.create');
    Route::post('triptype/add',[TripTypeController::class,'store' ])->name('triptype.add');



    Route::get('tripfeature',[TripFeatureController::class,'TripFeature' ])->name('tripfeatures.index');
    Route::get('tripfeature/create',[TripFeatureController::class,'create' ])->name('tripfeature.create');
    Route::post('tripfeature/add',[TripFeatureController::class,'store' ])->name('tripfeature.add');


    Route::get('transport',[TransportController::class,'Transport' ])->name('transports.index');
    Route::get('transport/create',[TransportController::class,'create' ])->name('transport.create');
    Route::post('transport/add',[TransportController::class,'store' ])->name('transport.add');

    Route::get('room',[RoomController::class,'Room' ])->name('rooms.index');
    Route::get('room/create',[RoomController::class,'create' ])->name('room.create');
    Route::post('room/add',[RoomController::class,'store' ])->name('room.add');


    Route::get('roomtype',[RoomTypeController::class,'RoomType' ])->name('roomtypes.index');
    Route::get('roomtype/create',[RoomTypeController::class,'create' ])->name('roomtype.create');
    Route::post('roomtype/add',[RoomTypeController::class,'store' ])->name('roomtype.add');


    Route::get('booking',[BookingController::class,'Booking' ])->name('bookings.index');
    Route::get('booking/create',[BookingController::class,'create' ])->name('booking.create');
    Route::post('booking/add',[BookingController::class,'store' ])->name('booking.add');


    Route::get('review',[ReviewController::class,'Review' ])->name('reviews.index');
    Route::get('review/create',[ReviewController::class,'create' ])->name('review.create');
    Route::post('review/add',[ReviewController::class,'store' ])->name('review.add');
});
