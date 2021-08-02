@extends('layouts.app')

@section('content')
    <h1>Create publisher</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\PublishersController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address']) }}
    </div>

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
