@extends('main')

@section('title', '| Home page')

@section('content')

    <div class="title m-b-md">
        Welcome
    </div>

    <p class="centred">This is a test blog site created in Laravel</p>

    <div class="row">

        @foreach($posts as $post)
            <div class="card">
                <div class="card-header">
                    Latest post
                </div>
                <div class="col card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? '...' : "" }}</p>

                    <a href="{{ url('blog/'.$post->slug) }}" class="card-link">
                        Read more
                    </a>
                </div>
            </div>
        @endforeach

    </div>

@endsection
