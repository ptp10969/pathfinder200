@extends('layouts.master')
@section('content')
    <h1>Category: {{ $category->name }}</h1>

    @foreach($category->posts as $post)
    <div>
        <a href="{{route('posts.show',['post'=> $post->id])}}">{{$post->title}}</a>
    </div>
    @endforeach
@endsection