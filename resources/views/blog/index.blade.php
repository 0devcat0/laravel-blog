@extends('main')

@section('title', '| Blog')

@section('content')

    <div class="title m-b-md">
        Blog
    </div>

    @foreach ($posts as $post)
    <div class="row">
        <div class="card">
            <div class="col card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <h5 class="card-subtitle mb-2 text-muted">Published: {{ date('jS M Y, h:ia', strtotime($post->created_at)) }}</h5>
                <p>Category: <em>{{ $post->category->name }}</em></p>
                <p class="card-text">{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? '...' : "" }}</p>

                <a href="{{ url('blog/'.$post->slug) }}" class="card-link">
                    Read more
                </a>
            </div>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div>
                {!! $posts->links() !!}
            </div>
        </div>
    </div>

@endsection
