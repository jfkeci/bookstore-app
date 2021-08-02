@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="/publishers">Go back</a>

    <br>
    <br>
    <div class="col-md-12">
        <h3>{{ $publisher->name }}</h3>
        <p>Address: {{ $publisher->address }}</p>
        <hr>
        <small>Created: {{ $publisher->created_at }}</small>
    </div>
    <hr>

    <a href="/publishers/{{ $publisher->id }}/edit" class="btn btn-default"> Edit </a>

    {!! Form::open(['action' => ['App\Http\Controllers\PublishersController@destroy', $publisher->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    <hr>

@endsection
