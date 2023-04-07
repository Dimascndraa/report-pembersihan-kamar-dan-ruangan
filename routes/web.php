<?php

use App\Http\Controllers\BarangCategoryController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
})->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::resource('/rooms', RoomController::class);
    Route::resource('/categories', BarangCategoryController::class);
    Route::resource('/barang', BarangController::class);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/default.php';
