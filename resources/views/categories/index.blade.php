@extends('layouts.master')

@section('content')
<h1>All Catagories</h1>

@foreach($categories as $category)
<div>
    <a href="{{route('categories.show' ,  ['category' => $category])}}">{{$category->name}}</a>
</div>
@endforeach
@endsection