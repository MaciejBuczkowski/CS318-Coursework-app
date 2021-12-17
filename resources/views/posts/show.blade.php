@extends('layouts.webapp')

@section('title', 'Post details')

@section('content')

    <div class='top_buttons'>
        <div class='logout_button'>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>

        <div class='back'>
            <form method='GET' action='{{route("posts.index")}}'>
                <input type='submit' value='Back'>
            </form>
        </div>
    </div>

    <h2 id='title'><strong>{{$post->title}}</strong></h2>
    <div id='content'>
        <p>{{$post->post_content}}</p>
    </div>

    <p id = 'author'>author: {{$post->profile->user->name}}</p>

    

    <div class='bot_buttons'>
        @if (Auth::user() && (Auth::user()->profile->id == $post->profile_id))
            <div class='delete'>    
                <form method='POST' action='{{route("posts.destroy", [$post])}}'>
                    @csrf
                    @method('DELETE')
                    <button type='submit'>Delete post</button>
                </form>
            </div>

            <div class='edit'>
                <form method='GET' action='{{route("posts.edit",["post" => $post])}}'>
                    @csrf
                    <button type='submit'>Edit post</button>
                </form>
            </div>
        @endif
    </div>

    <div class='comment_form'>
        <form method="post" action="{{ route('comment.store',['post' => $post]) }}">
            @csrf
            
            <input id='input_field' type="text" name="content"/>
            <input type="hidden" name="post_id" value="{{ $post->id }}" />
            <input type="submit" value="Add Comment" />
                    
        </form>
    </div>

    <div class='comments'>
        @foreach($post->comments as $comment)
            <strong>{{$comment->profile->user->name}}</strong>
            <p>{{$comment->content}}</p>

            <form method='POST' action='{{route("comment.destroy", ["comment"=>$comment])}}'>
            @csrf    
            @method('DELETE')
                @if (Auth::user() && (Auth::user()->profile->id == $comment->profile_id))
                    <button type='submit'>Delete comment</button>
                @endif
            </form>
        @endforeach
    </div>

    <style>
        .logout_button{
            float:right;
            width:100px;
            text-align: left;
        }
        
        .back{
            float:left;
            width:100px;
            text-align: right;
        }

        .edit{
            float:right;
            width:100px;
            text-align: left;
        }
        
        .delete{
            float:left;
            width:100px;
            text-align: right;
        }

        #title{
            text-align:center;
            font-size:50px;
        }

        #content{
            text-align:center;
            font-size:20px;
            height:500px;
            width:500px;
            position:absolute;
            top: 20%;
            left: 50%;
            margin: -25px 0 0 -250px;
        }

        #input_field{
            width:500px;
            height:100px;
        }

        .comment_form{
            position:absolute;
            bottom: 33%;
            left: 50%;
            margin: -25px 0 0 -280px;
        }

        .comments{
            position:absolute;
            bottom: 25%;
            left: 50%;
            margin: -25px 0 0 -280px;
        }

        #author{
            position:absolute;
            bottom:30%
        }

    </style>

@endsection