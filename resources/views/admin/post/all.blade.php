@extends('layouts.admin')
@section('title') All Users @endsection
@section('content')
<h1 class="text-center">All Members</h1>
<div class="container">
    <a href="{{route('post.create')}}" class="btn btn-primary">Add user</a>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Created at</th>
                <th scope="col">Controll</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <th scope="row">1</th>
                <td><img src="{{URL::asset('img/')}}/{{$post->image}}" alt="" height="50vh"></td>
                <td>{{$post->title}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->created_at}}</td>
                <td class="d-flex">
                    <a href="{{route('post.show' , $post->id)}}" class="btn btn-info">Show</a>
                    <a href="{{route('post.edit' , $post->id)}}" class="btn btn-warning">Edit</a>
                    {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                    <form method="post" action="{{route('post.destroy' , $post->id)}}">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @forelse ($posts as $post)
    @empty
    <h2 class="text-danger">No Posts for this User</h2>
    @endforelse
    {{-- {{ $users->links() }} --}}
</div>
@endsection
