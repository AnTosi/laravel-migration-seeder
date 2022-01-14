<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header class="my-3 text-center">
            <h1>
                Questo è l'header
            </h1>
        </header>
        @yield('content')
        <footer>
            <h1 class="my-3 text-center">
                Questo è il footer
            </h1>
        </footer>
    </body>
</html>