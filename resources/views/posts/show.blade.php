@extends('layouts.webapp')

@section('title', 'Post details')

@section('content')

    <ul>

        <li>Title: {{$post->title}}</li>
        <li>Content: {{$post->post_content}}</li>
        <li>author id: {{$post->profile_id}}</li>

    </ul>

@endsection