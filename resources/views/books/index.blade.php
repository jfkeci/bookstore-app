@extends('layouts.app')

@section('content')
    <h1>Books</h1>

    @if (count($books) > 0)
        <div class="card">
            <ul class="list-group list-group-flash">
                @foreach ($books as $book)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/books/{{ $book->id }}">
                                    <h3>{{ $book->title }}</h3>
                                </a>
                                <small>{{ $book->created_at }}</small>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
