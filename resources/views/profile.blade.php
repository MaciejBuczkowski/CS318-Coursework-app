@extends('layouts.webapp')

@section('title', 'Profile')

@section('content')

    
    <div class='logout_button'>
        <form id = 'logout_form' method="POST" action="{{ route('logout') }}">
            @csrf

            <button :href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

    <div class='posts_button'>
        <form method='GET' action='{{route("posts.index")}}'>
            <input type='submit' value='Posts'>
        </form>
    </div>

    <h2 id='name'>{{Auth::user()->name}}</h2>
    <p id='dob'>DOB: {{Auth::user()->profile->date_of_birth}}</p>
    <p id='email'>email: {{Auth::user()->email}}</p>
    

    <style>
        .logout_button{
            float:right;
            width:100px;
            text-align: left;
        }

        .posts_button{
            float:left;
            width:100px;
            text-align: right;
        }

        #name{
            align-self:center;
            text-align:center;
        }

        #dob{
            align-self:center;
            text-align:center;
        }

        #email{
            align-self:center;
            text-align:center;
        }

    </style>

@endsection