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

    <form method="post" action="{{ route('comment.store',['post' => $post]) }}">
        @csrf
        
        <input type="text" name="content"/>
        <input type="hidden" name="post_id" value="{{ $post->id }}" />
        <input type="submit" value="Add Comment" />
                
    </form>

    @foreach({{route('comment.show',['id' => $post])}} as $comment)
        <strong>{{$comment->profile_id}}</strong>
        <p>{{$comment->content}}</p>
    @endforeach

@endsection