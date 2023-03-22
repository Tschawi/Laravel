<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/applications.css') }}">
    <title>Document</title>
</head>
<body>
    <p>Anmeldungen:</p>
    <ul>
        @foreach($applications as $application)
            <li>{{ $application -> firstname }} {{ $application -> lastname }}</li>
        @endforeach
    </ul>

    <p>Abmeldungen: {{$declinedapplications}}</p>
</body>
</html>