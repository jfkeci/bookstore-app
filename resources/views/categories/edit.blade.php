@extends('layouts.app')

@section('content')
    <h1>Edit category</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\CategoriesController@update', $category->id], 'method' => 'POST']) !!}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}
    </div>

    {{ Form::hidden('_method', 'PUT') }}

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
