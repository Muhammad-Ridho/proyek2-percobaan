<?php

use App\Http\Controllers\PendudukController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('layout.home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Penduduk
Route::get('/Penduduk', [PendudukController::class, 'index'])->name('penduduk');

// Region
Route::get('/Wilayah', [RegionController::class, 'index'])->name('wilayah');

// Table
Route::get('/Table', [TableController::class, 'index'])->name('wilayah');
