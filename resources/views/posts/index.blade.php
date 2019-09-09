@extends('main')

@section('title', '| All posts')

@section('content')

    <div class="row top-space">
        <div class="col-md-10">
            <h1>All posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-block btn-primary btn-h1-spacing">
                Create new post
            </a>
        </div>

        <hr>
    </div>

    <div class="row top-space">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                        <th scope="col">Created</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ substr($post->title, 0, 20) }}{{ strlen($post->title) > 20 ? '...' : "" }}</td>
                            <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? '...' : "" }}</td>
                            <td>{{ date('jS M Y, h:ia', strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
