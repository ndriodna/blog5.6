<!DOCTYPE html>
<html>
    <head>
        <title>Blog | @yield('title')</title>
        <link rel="shortcut icon" href="{{asset('assets/image/favicon-96x96.png')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    </head>
    <body>
        <style type="text/css">
        canvas{
            display: block;
            position: absolute;
        }
        </style>
        <div ></div>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper blue" id="particles-js">
                    <a class="brand-logo" href="{{url('/')}}">
                        Coding
                    </a>
                    @auth
                    <a href="#" class="sidenav-trigger" data-target="mobile-demo"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#" class="dropdown-trigger btn red " data-target="dropdown1">{{Auth::user()->name}}</a></li>
                    </ul>
                    <ul class="right show-on-med-and-down hide-on-large-only">
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
                    </ul>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a style="cursor: default;">{{Auth::user()->name}}</a></li>
                        <li class="divider" tabindex="5"></li>
                        <li> <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li>
                    </ul>
                    @endauth
                    @guest
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{route('register')}}">Register</a></li>
                    </ul>
                    @endguest
                </div>
            </nav>
        </div>
        @yield('head')