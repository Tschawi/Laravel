<?php

namespace App\Http\Controllers;

use App\Models\Event;

class CreateController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        Event::create($attributes);
        return redirect('/');
    }
}