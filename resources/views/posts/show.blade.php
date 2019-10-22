@extends('layouts.master')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>
        {{ $post->category->name}}
        {{ $post->detail}}
        By :{{ $post->user->name }}
    </p>
    @auth
        @can ('update' ,$post)
    <div>
        <a class = "btn btn-outline-primary" 
        href="{{route('posts.edit',['post' => $post->id ])}}">Edit</a>
    </div>
    @endcan
    @can ('delete' ,$post)
    <div>
    <form action="{{ route('posts.destroy',['post' => $post->id])}}" method="post">
    @csrf
    @method('DELETE')
    <button type='submit' class="btn btn-outline-danger">DELETE</button>
    </form>
    </div>
        @endcan
    @endauth
@endsection