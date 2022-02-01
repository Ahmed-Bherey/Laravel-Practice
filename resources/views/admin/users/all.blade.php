@extends('layouts.admin')
@section('title') All Users @endsection
@section('content')
<h1 class="text-center">All Members</h1>
<div class="container">
    <a href="{{route('user.create')}}" class="btn btn-primary">Add user</a>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
                <th scope="col">Controll</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <th scope="row">1</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{route('user.showPosts' , $user->id)}}" class="btn btn-dark">Posts</a>
                    <a href="{{route('user.show' , $user->id)}}" class="btn btn-info">Show</a>
                    <a href="{{route('user.edit' , $user->id)}}" class="btn btn-warning">Edit</a>
                    {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                    <form method="post" action="{{route('user.destroy' , $user->id)}}">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
