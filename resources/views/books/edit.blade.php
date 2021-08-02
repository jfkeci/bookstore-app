@extends('layouts.app')

@section('content')
    <h1>Update a book</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\BooksController@update', $book->id], 'method' => 'POST']) !!}

    <div class="form-group">
        <select name="category" id="category" class="form-select form-select-lg mb-3">
            @foreach ($categories as $category)
                @if ($category->id === $book->category_id)
                    <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select name="author" id="author" class="form-select form-select-lg mb-3">
            @foreach ($authors as $author)
                @if ($author->id === $book->author_id)
                    <option selected value="{{ $author->id }}">{{ $author->name }}</option>
                @else
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select name="publisher" id="publisher" class="form-select form-select-lg mb-3">
            @foreach ($publishers as $publisher)
                @if ($publisher->id === $book->publisher_id)
                    <option selected value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                @else
                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $book->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', $book->description, ['class' => 'form-control', 'placeholder' => 'Description']) }}
    </div>

    <div class="form-group">
        {{ Form::label('num_of_pages', 'Number of pages') }}
        {{ Form::number('num_of_pages', $book->num_of_pages, ['class' => 'form-control', 'placeholder' => 'Number of pages']) }}
    </div>

    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::number('price', $book->price, ['class' => 'form-control', 'placeholder' => 'Price']) }}
    </div>

    <div class="form-group">
        {{ Form::label('amount', 'Amount') }}
        {{ Form::number('amount', $book->amount, ['class' => 'form-control', 'placeholder' => 'Amount']) }}
    </div>

    <div class="form-group">
        {{ Form::label('sold', 'Sold') }}
        {{ Form::number('sold', $book->sold, ['class' => 'form-control', 'placeholder' => 'Sold']) }}
    </div>

    {{ Form::hidden('_method', 'PUT') }}

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
