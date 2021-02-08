<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/items', [TokoController::class, 'index']);
Route::get('/items/create', [TokoController::class, 'create']);
Route::post('/items', [TokoController::class, 'store']);
Route::get('/items/{id}', [TokoController::class, 'show']);
Route::get('/items/{id}/edit', [TokoController::class, 'edit']);
Route::put('/items/{id}', [TokoController::class, 'update']);
Route::delete('/items/{id}', [TokoController::class, 'destory']);
Route::get('/pesans', [PesanController::class, 'pesans']);
Auth::routes();