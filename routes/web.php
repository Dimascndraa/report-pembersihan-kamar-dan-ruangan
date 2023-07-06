<?php

use App\Http\Controllers\BarangCategoryController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\ControlPanelController;
use App\Http\Controllers\KelasRawatController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TemplateBarangController;
use App\Http\Controllers\UserController;
use App\Models\KelasRawat;
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

Route::middleware('admin')->group(function () {
    Route::resource('/user', UserController::class);
    Route::put('/user/{user:id}/pindah', [UserController::class, 'pindahkan']);
    Route::put('/user/{user:id}/update-password', [UserController::class, 'updatePassword']);
    Route::put('/user/{user:id}/akses', [UserController::class, 'akses']);
    Route::resource('/cpanel', ControlPanelController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('/kelas-rawat', KelasRawatController::class);
    Route::get('/ruangan/{kelas_rawats:id}', [KelasRawatController::class, 'ruangan']);
    Route::get('/bed/{rooms:id}', [KelasRawatController::class, 'tempat_tidur']);
    Route::resource('/ruangan', RoomController::class);
    Route::resource('/bed', BedController::class);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/default.php';
