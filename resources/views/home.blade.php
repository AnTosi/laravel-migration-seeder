@extends('layouts/layout')

@section('content')
<h3 class="text-center py-3">Magnifica agenzia turistica Boolean presenta:
</h3>
<div class="package_container d-flex flex-wrap">
    @foreach ($flights as $flight)
        <div class="card mx-2 p-3 text-center">
            <h2>{{$flight->location}}</h2>
            <p>Dal {{$flight->leave_date}} al {{$flight->return_date}}</p>
            <p>A soli {{$flight->price}} dobloni</p>
            <p>{{$flight->package_name}}!!!</p>
        </div>
        
    @endforeach

</div>
@endsection