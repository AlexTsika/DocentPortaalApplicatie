@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Results</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                @if ($searchResults->isEmpty())
                    <p>No results found.</p>
                @else
                    <ul class="list-group">
                        @foreach ($searchResults as $result)
                            <li class="list-group-item">
                                <a href="{{ $result->url }}">{{ $result->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
