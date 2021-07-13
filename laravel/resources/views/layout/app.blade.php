<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->
    <style>


    </style>
</head>

<body>
    <header>
        <h1>
            ¿wherego?
        </h1>

        <nav>
            <a href="">home</a>
            <a href="{{route('holiday')}}">vacanze</a>
        </nav>
    </header>
    @yield('content')
</body>

</html>