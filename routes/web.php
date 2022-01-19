<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InventoryController;   

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 

Route::resource('posts', PostController::class);
Route::resource('inventories', InventoryController::class);
Route::get('/search/', 'PostController@search')->name('search');

Route::get('/changePassword', [App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword', [App\Http\Controllers\HomeController::class, 'changePasswordPost'])->name('changePasswordPost');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

