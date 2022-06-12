<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\RegistroController;
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
Route::get('/', [SesionController::class,'login']);

Route::get('/register', [RegistroController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegistroController::class, 'store'])->name('register.store');

Route::get('/login', [SesionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/', [SesionController::class, 'store'])->name('login.store');

Route::get('/logout', [SesionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');
