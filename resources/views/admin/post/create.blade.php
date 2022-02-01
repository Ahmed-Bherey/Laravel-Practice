@extends('layouts.admin')
@section('title') Create User @endsection
@section('content')
<div class="container">
    <h1 class="text-center">Create Post</h1>
    <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                    name="desc"></textarea>
                <label for="floatingTextarea">Descreption</label>
                @error('desc')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" name="image">
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
