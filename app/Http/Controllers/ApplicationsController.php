<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    //
    function applications(){

        $applications = \App\Models\Application::where('answer', 'yes');
    
        $declinedApplications = \App\Models\Application::where('answer', 'no')->count();
        dd($declinedApplications);
    
        return view('applications',[
            'applications'=> $applications]);
        }
}
