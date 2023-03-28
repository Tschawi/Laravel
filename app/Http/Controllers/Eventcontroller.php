<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id){
        $event = Event::findOrFail($id);

        return view('anmeldung', [
            'event' => $event
            ]);
    }

    public function list(){
        $events = Event::with('applications')->get();
        return view('events', [
            'events' => $events
        ]);
    }
}
