<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/kontak', [PagesController::class, 'kontak']);

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::post('/artikel', [ArtikelController::class, 'store']);

Route::get('/movie/create', [ArtikelController::class, 'create']);
Route::delete('/movie/{movie}', [ArtikelController::class, 'destroy']);
Route::get('/movie/{movie}', [ArtikelController::class, 'show']);

Route::get('/movie/edit/{movie}', [ArtikelController::class, 'edit']);
Route::put('/movie/{movie}', [ArtikelController::class, 'update']);
