@extends('main')

@section('title', "| $post->title" )

@section('content')

    <div class="row top-space">
        <div class="col-md-8 offset-2">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <hr>
        <p>Category: {{ $post->category->name }}</p>
        </div>
    </div>

@endsection
