<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Eventcontroller;
use \App\Http\Controllers\ApplicationsController;

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

Route::post('/event', [ApplicationsController::class, 'create']);

Route::get('/event/applications', [ApplicationsController::class, 'list']);