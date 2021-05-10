@section('title', 'Home')
@extends('layout')
@section('content')
    @include('partials.create')
    @foreach ($posts as $post)
        @include('partials.summary')
    @endforeach

@endsection
