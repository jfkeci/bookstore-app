@extends('layouts.app')

@section('content')
    <h1>Edit publisher</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\PublishersController@update', $publisher->id], 'method' => 'POST']) !!}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', $publisher->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', $publisher->address, ['class' => 'form-control', 'placeholder' => 'Address']) }}
    </div>

    {{ Form::hidden('_method', 'PUT') }}

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
