@extends('welcome')

@section('content')

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col">
                <h1>{{ $teacher->firstname }} {{ $teacher->lastname }}</h1>
                <h2>Category: {{ $teacher->category_id }}</h2>
                <h3>Location: {{ $teacher->location_id }}</h3>
                <button class="btn btn-primary mt-5 mb-5">Contact Me</button>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col">
                @component('components.map')
                @endcomponent
            </div>
        </div> --}}
    </div>


@endsection