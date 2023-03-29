@extends('layouts.default')

@section('title', 'Applications')

@section('content')
    <p>Anmeldungen:</p>
    <ul>
        @foreach($applications as $application)
            <li>{{ $application -> firstname }} {{ $application -> lastname }}</li>
        @endforeach
    </ul>

    <p>Abmeldungen: {{$declinedapplications}}</p>
@endsection