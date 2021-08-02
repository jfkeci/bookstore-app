@extends('layouts.app')

@section('content')
    <h1>Create a book</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\BooksController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        <select name="category" id="category" class="form-select form-select-lg mb-3">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <select name="author" id="author" class="form-select form-select-lg mb-3">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <select name="publisher" id="publisher" class="form-select form-select-lg mb-3">
            @foreach ($publishers as $publisher)
                <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description']) }}
    </div>

    <div class="form-group">
        {{ Form::label('num_of_pages', 'Number of pages') }}
        {{ Form::number('num_of_pages', '', ['class' => 'form-control', 'placeholder' => 'Number of pages']) }}
    </div>

    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Price']) }}
    </div>

    <div class="form-group">
        {{ Form::label('amount', 'Amount') }}
        {{ Form::number('amount', '', ['class' => 'form-control', 'placeholder' => 'Amount']) }}
    </div>

    <div class="form-group">
        {{ Form::label('sold', 'Sold') }}
        {{ Form::number('sold', '', ['class' => 'form-control', 'placeholder' => 'Sold']) }}
    </div>

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
