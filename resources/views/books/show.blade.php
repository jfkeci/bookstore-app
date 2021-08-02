@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="/books">Go back</a>

    <br>
    <br>
    <div class="col-md-12">
        <h1>{{ $book->title }}</h1>
        <hr>
        <small>Created: {{ $book->created_at }}</small>
    </div>
    <hr>

    <a href="/books/{{ $book->id }}/edit" class="btn btn-default"> Edit</a>

    {!! Form::open(['action' => ['App\Http\Controllers\BooksController@destroy', $book->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

@endsection
