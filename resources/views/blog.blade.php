@extends('layouts/layout')

@section('page-title', 'Blog')

@section('content')
    <h2 class="m-3">
        Il nostro blog:
    </h2>

    @foreach ($posts as $post)
        <div class="card card_post my-4 p-3">
            <h4>
                {{$post->author}}
            </h4>
            <img src="{{$post->image}}" alt="">
            <p>{{$post->text}}</p>
            <span>{{$post->time}} {{$post->date}}</span>
        </div>
    @endforeach
    
@endsection