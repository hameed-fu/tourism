<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

Route::get('/',[CategoryController::class,'index'])->name('category.index');
Route::post('/category/save',[CategoryController::class,'store'])->name('category_save');
Route::get('/category/{id}',[CategoryController::class,'destroy'])->name('category_delete');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update',[SiteController::class,'update'])->name('cat.update');

Route::prefix('admin')->group(function() {
    // Route::get('dashboard', function () {
    //     return view('backend.dashboard');
    // });

    Route::get('dashboard',[AdminController::class,'dashboard']);
    Route::get('users',[AdminController::class,'users']);
    Route::get('user/{name}',[AdminController::class,'demo'])->name('user.name');

    Route::resource('category', CategoryController::class);



});


