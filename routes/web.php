<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
});

Route::prefix('admin')->group(function() {
    // Route::get('dashboard', function () {
    //     return view('backend.dashboard');
    // });

    Route::get('dashboard',[AdminController::class,'dashboard']);
    Route::get('users',[AdminController::class,'users']);
    Route::get('user/{name}',[AdminController::class,'demo'])->name('user.name');



});


