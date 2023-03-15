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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/anmeldung', function () {
    return view('anmeldung');
});
Route::post('/anmeldung', [Eventcontroller::class, 'create']);

Route::get('/anmeldung/applications', [ApplicationsController::class, 'applications']);