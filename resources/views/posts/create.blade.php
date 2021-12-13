@extends('layouts.webapp')

@section('title', 'Create Post')

@section('content')

    <form method='POST' action="{{ route('posts.store') }}">
        @csrf
        <p>Title: <input type='text' name='title'></p>
        <p>Content: <input type='text' name='post_content'></p>

        <input type='submit' value='Post'>
        <a href = "{{route('posts.index')}}">Back</a>
    </form>

@endsection