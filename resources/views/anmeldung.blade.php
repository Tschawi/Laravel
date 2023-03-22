<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/anmeldung.css') }}">
</head>
<body>
    <h1> {{$event -> title}}</h1>
    <p>{{$event -> description}}</p>
    <p>{{$event -> date}}</p>

    <form method="Post">
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
</body>
</html>