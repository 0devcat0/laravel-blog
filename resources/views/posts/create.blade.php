@extends('main')

@section('title', '| Create new post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2 new-post-form">
            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(['route' => 'posts.store', 'data-parsely-validate' => '']) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control form-group form-control-lg', 'required' => '']) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, ['class' => 'form-control form-group', 'required' => '']) }}

                {!! Form::label('category', 'Category:') !!}
                <select class="form-control form-group" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                {{ Form::label('body', 'Post body:') }}
                {{ Form::textarea('body', null, ['class' => 'form-control form-group', 'required' => '']) }}

                {{ Form::submit('Create post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;']) }}
            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection
