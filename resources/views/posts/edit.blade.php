@extends('layouts.webapp')

@section('title', 'Edit Post')

@section('content')

    <form method='POST' action="{{ route('posts.update',['post'=>$post]) }}">
        @csrf
        @method('PUT')
        <p>Title: <input type='text' name='title' value='{{$post->title}}'></p>
        <p>Content: <input type='text' name='post_content' value='{{$post->post_content}}'></p>

        <input type='submit' value='Submit'>
        <a href = "{{route('posts.show',['id' => $post->id])}}">Back</a>
    </form>

@endsection