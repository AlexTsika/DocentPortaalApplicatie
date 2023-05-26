@extends('welcome')

@section('content')

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col">
                <h1>{{ $location->id }} {{ $location->name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @component('components.map')
                @endcomponent
            </div>
        </div>
    </div>


@endsection