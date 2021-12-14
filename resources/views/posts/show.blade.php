@extends('layouts.webapp')

@section('title', 'Post details')

@section('content')

    <ul>

        <li>Title: {{$post->title}}</li>
        <li>Content: {{$post->post_content}}</li>
        <li>author id: {{$post->profile_id}}</li>

    </ul>

    <form method='POST' action='{{route("posts.destroy", [$post])}}'>
        @csrf
        @method('DELETE')
        <button type='submit'>Delete post</button>
    </form>

    <button type='submit' href="{{route('posts.edit',['post' => $post])}}">Edit</button>

@endsection