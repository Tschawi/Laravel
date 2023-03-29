@extends('layouts.default')

@section('title', 'Event')

@section('content')
    <h1> {{$event -> title}}</h1>
    <p>{{$event -> description}}</p>
    <p>{{$event -> date}}</p>

    <form method="Post">
        <a href="{{ url('/event/' . $event->id . '/applications') }}">Anmeldungen ansehen</a>
        @csrf
        <p>
            <label for="email">E-Mail:</label>
            <input type="email" name="email" id="email" placeholder="E-mail">
        </p>
        <p>
            <label for="lastname">Last-Name:</label>
            <input type="text" name="lastname" id="lastname" placeholder="lastname">
        </p>
        <p>
            <label for="firstname">First-Name:</label>
            <input type="text" name="firstname" id="firstname" placeholder="firstname">
        </p>
        <p>
            <label for="answer">Answer:</label>
            <input type="text" name="answer" id="answer" placeholder="answer">
        </p>
        <input type="submit" value="Anmelden">
    </form>
    @endsection
