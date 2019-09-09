@extends('main')

@section('title', '| $post->title</')

@section('content')

    <h1>Post details</h1>
    <hr>

    <div class="row post-content">
        <div class="col-md-8 justify-content-md-center">
            <h1>{{ $post->title }}</h1>

            <p class="lead">{{ $post->body }}</p>
        </div>

        <div class="col-md-4">
            <div class="card side-col-card">
                <dl class="dl-horizontal">
                    <dt>URL:</dt>
                    <dd>
                        <a href="{{ route('blog.single', $post->slug) }}">
                            {{ route('blog.single', $post->slug) }}
                        </a>
                    </dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Created:</dt>
                    <dd>{{ date('jS M Y, h:ia', strtotime($post->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Updated:</dt>
                    <dd>{{ date('jS M Y, h:ia', strtotime($post->updated_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Category</dt>
                    <dd>{{ $post->category->name }}</dd>
                </dl>

                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>

                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row side-col-btn-fullwidth">
                        {{ Html::linkRoute('posts.index', 'See all posts', array(), ['class' => 'btn btn-light btn-block']) }}
                </div>
            </div>
        </div>
    </div>


@endsection
