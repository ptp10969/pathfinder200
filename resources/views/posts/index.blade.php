@extends('layouts.master')

@section('content')
  @auth
  <h1>All Post for {{ Auth::user()->name}}</h1>
  @else
  <h1>All Post</h1>
  @endauth
@can ('create',\App\Post::class)
  <div>
  <a href="{{ route('posts.create')}}" class = 'btn btn-outline-primary'>Create new post</a>
  </div>
  @endcan
    @foreach ($posts as $post)
    <div class="card" style="width: 18rem; float:left;">
     <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->detail}}</p>
    <p> Created : {{$post->created_at->diffForHumans()}}
    <a href=" {{url('posts/' . $post->id)}}">LINK</a>
  </div>
</div>
    @endforeach
    </p>
@endsection