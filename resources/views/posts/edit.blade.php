@extends('main')

@section('title', '| Edit blog post')

@section('content')

    <h1>Edit post</h1>
    <hr>

    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

        <div class="row post-content">

            <div class="col-md-8">
                {{ Form::label('Title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control form-group form-control-lg']) }}

                {{ Form::label('Slug', 'Slug:') }}
                {{ Form::text('slug', null, ['class' => 'form-control form-group']) }}

                {{ Form::label('body', 'Body:') }}
                {{ Form::textarea('body', null, ['class' => 'form-control']) }}
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
                            {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
                        </div>

                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                        </div>
                    </div>

                    <div class="row side-col-btn-fullwidth">
                            {{ Html::linkRoute('posts.index', 'See all posts', array(), ['class' => 'btn btn-light btn-block']) }}
                    </div>

                </div>
            </div>

        </div>

    {!! Form::close() !!}

@endsection
