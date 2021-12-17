@extends('layouts.webapp')

@section('title', 'Create Post')

@section('content')

    <form method='POST' action="{{ route('posts.store') }}">
        @csrf
        <p>Title: </p>
        <input id='title' type='text' name='title'>
        <p>Content: </p>
        <input id='content' type='text' name='post_content'>

        <input id='button' type='submit' value='Post'>
        <a id='back' href = "{{route('posts.index')}}">Back</a>
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