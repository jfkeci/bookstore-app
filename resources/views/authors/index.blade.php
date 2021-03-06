@extends('layouts.app')

@section('content')
    <h1>Authors</h1>

    @if (count($authors) > 0)
        <div class="card">
            <ul class="list-group list-group-flash">
                @foreach ($authors as $author)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/authors/{{ $author->id }}">
                                    <h3>{{ $author->name }}</h3>
                                </a>
                                <small>{{ $author->created_at }}</small>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
