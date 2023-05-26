@extends('welcome')


@section('content')
<h1>about</h1>
<h1>  {{ $aboutPage->title }}</h1>
<p>{{ $aboutPage->content }}</p>
@endsection
