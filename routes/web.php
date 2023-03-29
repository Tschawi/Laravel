<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Eventcontroller;
use \App\Http\Controllers\ApplicationsController;
use \App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

Route::get('/', [EventController::class, 'list']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::post('/event/{id}', [ApplicationsController::class, 'create']);

Route::get('/event/{id}/applications', [ApplicationsController::class, 'List']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');

Route::post('login', [SessionsController::class, 'store'])->middleware('guest');