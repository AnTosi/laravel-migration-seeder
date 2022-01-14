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
        <h3>Magnifica agenzia turistica Boolean presenta:
        </h3>
        <div class="package_container d-flex flex-wrap">
            @foreach ($flights as $flight)
                <div class="card mx-2">
                    <h2>{{$flight->location}}</h2>
                    <p>Dal {{$flight->leave_date}} al {{$flight->return_date}}</p>
                    <p>A soli {{$flight->price}} dobloni</p>
                    <p>{{$flight->package_name}}!!!</p>
                </div>
                
            @endforeach

        </div>
    </body>
</html>