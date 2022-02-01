@extends('layouts.admin')
@section('title') Edit User @endsection
@section('content')
<div class="container">
    <h1 class="text-center">Edit User</h1>
    <form method="POST" action="{{route("user.update" , $user->id)}}">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label class="form-label">UserName</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
