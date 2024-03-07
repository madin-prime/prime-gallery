@extends('layout.app')

@section('title', 'Prime Gallery')

@section('content')

    <div class="row">

        @foreach( $image as $img)

        <img class="img" src="{{ asset('storage', $image->image) }}" alt="image">

        @endforeach 
    </div>

@endsection