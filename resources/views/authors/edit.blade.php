@extends('layouts.app')

@section('content')
    <h1>Edit author</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\AuthorsController@update', $author->id], 'method' => 'POST']) !!}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', $author->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}
    </div>

    <p>Date of birth </p><input type="date" name="date_of_birth" id="date_of_birth" value="{{ $author->date_of_birth }}">

    <p>Date of death </p><input type="date" name="date_of_death" id="date_of_death" value="{{ $author->date_of_death }}">

    <br>
    <br>

    {{ Form::hidden('_method', 'PUT') }}

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
