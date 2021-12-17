@extends('layouts.webapp')

@section('title', 'Edit Post')

@section('content')

    <form method='POST' action="{{ route('posts.update',['post'=>$post]) }}">
        @csrf
        @method('PUT')
        <p>Title: </p>
        <input id='title' type='text' name='title' value='{{$post->title}}'>
        <p>Content: </p>
        <input id='content' type='text' name='post_content' value='{{$post->post_content}}'>

        <input id='button' type='submit' value='Submit'>
        <a id='back' href = "{{route('posts.show',['id' => $post->id])}}">Back</a>
    </form>

    <style>

        #title{
            width:300px;
        }

        #content{
            width:600px;
            height:200px;
        }

        #button{
            position:absolute;
            top:30%;
            left:0%;
        }

        #back{
            position:absolute;
            top:30%;
            left:10%;
        }

    </style>

@endsection