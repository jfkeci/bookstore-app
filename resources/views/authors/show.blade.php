@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="/authors">Go back</a>

    <br>
    <br>
    <div class="col-md-12">
        <h1>{{ $author->name }}</h1>
        <hr>
        <small>Created: {{ $author->created_at }}</small>
    </div>
    <hr>

    <a href="/authors/{{ $author->id }}/edit" class="btn btn-default"> Edit </a>

    {!! Form::open(['action' => ['App\Http\Controllers\AuthorsController@destroy', $author->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

@endsection
