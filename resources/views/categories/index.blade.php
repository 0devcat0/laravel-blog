@extends('main')

@section('title', '| All categories')

@section('content')

    <div class="row top-space">
        <div class="col-md-8">
            <h1>Categories</h1>
        </div>
    </div>

    <div class="row top-space">
        <div class="col-md-8">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="col-md-4">
            <div class="card side-col-card">
                {!! Form::open(['route' => 'categories.store']) !!}
                    <h3>Create new category</h3>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control form-group']) }}

                    {{ Form::submit('Create', ['class' => 'btn btn-success btn-block']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
