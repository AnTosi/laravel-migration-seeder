<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header class="my-3 text-center">
            <nav class="nav nav-tabs nav-stacked d-flex justify-content-around">          
                <a class="nav-link" href="blog">Blog</a>
                <a class="nav-link" href="other">Other</a>
            </nav>
        </header>
        @yield('content')
        <footer>
            <h1 class="my-3 text-center">
                Questo è il footer
            </h1>
        </footer>
    </body>
</html>