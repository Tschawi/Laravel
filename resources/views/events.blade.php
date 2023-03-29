@extends('layouts.default')

@section('title', 'Events')

@section('content')
    <h1>Events</h1>
    <ul>
        @foreach($events as $event)
            <li><div>{{ $event -> title }} <small>{{ $event -> date }}</small> <a href="/event/{{$event -> id}}">Beitreten</a></div> </li>
        @endforeach
    </ul>
@endsection
