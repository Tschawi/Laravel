<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/anmeldung', function(){
    $request = request();

    $application = new \App\Models\Application();
    $application->answer = $request->get('answer');
    $application->firstname = $request->get('firstname');
    $application->lastname = $request->get('lastname');
    $application->email = $request->get('email');
    $application->save();

    return redirect('/anmeldung');
});

Route::get('/anmeldung/applications', function(){

    $applications = \App\Models\Application::where('answer', 'yes');

    $declinedApplications = \App\Models\Application::where('answer', 'no')->count();
    dd($declinedApplications);

    return view('applications',[
        'applications'=> $applications]);
});