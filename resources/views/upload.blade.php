@extends('layout.app')

@section('title', 'Upload')

@section('content')
<div class="input-group mb-3">
    <form action="{{ route('submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="input-group-text" for="inputGroupFile01">Select Image</label>
        <input type="file" name="image" class="form-control" id="inputGroupFile01">
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection