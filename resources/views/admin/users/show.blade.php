@extends('layouts.admin')
@section('title') Show Information @endsection
@section('content')
<div class="container">
    <h1 class="text-center">Show {{$user->name}} info</h1>
    <form>
        <div class="mb-3">
            <label class="form-label">UserName</label>
            <input type="text" class="form-control" value="{{$user->name}}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" value="{{$user->email}}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Created at</label>
            <input type="text" class="form-control" value="{{$user->created_at}}" readonly>
        </div>
    </form>
</div>
@endsection
