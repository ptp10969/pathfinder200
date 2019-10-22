@extends('layouts.master')

@section('content')
    <h1>create new post</h1>

    <form action="{{ route('posts.store')}}" method="post">

    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
    @endif

    <div>
        <label for="title">Post Title</label>
        <input type = "text" class = "form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')}}">
        @error('title')
        <div class = 'alert alert-danger'>{{$message}}</div>
        @enderror
    </div>

    <div>
    <label for="detail">Post Detail</label>
    <textarea name="detail" class="form-control @error('title') is-invalid @enderror" id="detail" cols="30" row="10">{{ old('detail')}}</textarea>
    @error('detail')
        <div class = 'alert alert-danger'>{{$message}}</div>
    @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary"> Enter </button>
    </div>
    </form>
@endsection