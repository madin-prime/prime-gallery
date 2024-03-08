x@extends('layout.app')

@section('title', 'Prime Gallery')

@section('content')

    <div class="row">

        @foreach( $image as $img)

        <img class="rounded d-block" width="320" src="{{ asset('storage/' . $img->image) }}" alt="image">

        @endforeach
    </div>

@endsection
