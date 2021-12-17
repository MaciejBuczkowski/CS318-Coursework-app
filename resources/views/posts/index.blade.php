@extends('layouts.webapp')

@section('title', 'Posts')

@section('content')

    <div class='buttons'>
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
        
        <div class='create'>
            <form method='GET'  action = "{{route('posts.create')}}">
                <input value='Create a post' type='submit'/>
            </form>
        </div>
        <div class='profile'>
            <form method='GET'  action = "{{route('dashboard')}}">
                <input value='Profile' type='submit' />
            </form>
        </div>
    </div>

    <div class='posts'>
        <ul>
            @foreach ($posts as $post)
                <li><a href = "{{route('posts.show',['id' => $post->id])}}">{{$post->title}}</a></li>
            @endforeach
        </ul>
    </div>

    <div id='pages'>
        {{$posts->links()}}
    </div>

    <style>
        .logout_button{
            float:right;
            width:100px;
            text-align: left;
        }

        .create{
            float:left;
            width:100px;
            text-align: right;
        }

        .profile{
            float:left;
            width:100px;
            text-align: right;
            margin-left:10px;
        }

        .buttons{
            margin: 20px;
            display:block;
            width:100%;
        }

        .posts{
            position:absolute;
            margin:50px;
            display:block;
        }

        #pages{
            position:absolute;
            top: 33%;
            left: 50%;
            margin: -25px 0 0 -25px;
        }

    </style>

@endsection