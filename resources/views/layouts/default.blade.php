<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >

    @yield('head')

    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h1>Title</h1>
        <nav>
          <ul>
            <li><a href="/">All Events</a></li>
            @auth
            <li><a href="/create">create</a></li>
            <li><form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                @csrf

                <button type="submit">Log Out</button>
            </form></li>
            @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            @endauth
          </ul>
        </nav>
      </header>
      
    @yield('content')

    
    <x-flash />
</body>

</html>