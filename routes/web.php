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
Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk');
Route::get('/penduduk/add', [PendudukController::class, 'add']);

// Region
Route::get('/wilayah', [RegionController::class, 'index'])->name('wilayah');
Route::get('/wilayah/add', [RegionController::class, 'add']);

// Table
Route::get('/table', [TableController::class, 'index'])->name('wilayah');
