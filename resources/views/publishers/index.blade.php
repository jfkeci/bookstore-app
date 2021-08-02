@extends('layouts.app')

@section('content')
    <h1>Publishers</h1>

    @if (count($publishers) > 0)
        <div class="card">
            <ul class="list-group list-group-flash">
                @foreach ($publishers as $publisher)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/publishers/{{ $publisher->id }}">
                                    <h3>{{ $publisher->name }}</h3>
                                </a>
                                <small>{{ $publisher->created_at }}</small>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
