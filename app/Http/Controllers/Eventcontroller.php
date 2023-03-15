<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Eventcontroller extends Controller
{
    //
    function create(){
        $request = request();
    
        $application = new \App\Models\Application();
        $application->answer = $request->get('answer');
        $application->firstname = $request->get('firstname');
        $application->lastname = $request->get('lastname');
        $application->email = $request->get('email');
        $application->save();
    
        return redirect('/anmeldung');
    }
}
