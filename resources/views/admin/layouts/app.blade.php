<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=bryudn13ntrxh54wc3si1oi14yc4oeslvh7ljmq9xdbf8hnh"></script>

    @yield('tinymce')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body style="margin-bottom: 5em;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item"><i class="fa fa-bell"></i></li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <section class="container-fluid" style="float:left">
                <section style="margin-top: 2em;border-right: 1px solid lightgrey;width:20%;float:left;">
                    <ul style="list-style-type: none;margin-right:1em;">
                        <li><a href="{{ route('adminHome') }}">Dashboard</a></li>
                        <li>
                            <hr>
                            <strong>Blog</strong>
                        </li>
                        <li><a href="{{ route('adminAllPosts') }}">All Posts</a></li>
                        <li><a href="{{ route('adminNewPost') }}">Create New Post</a></li>
                        <li>
                            <hr>
                            <strong>Portfolio</strong>
                        </li>
                        <li><a href="{{ route('adminAllProjects') }}">All Projects</a></li>
                        <li><a href="{{ route('adminNewProject') }}">Add New Project</a></li>
                        <li>
                            <hr>
                            <strong>Testimoials</strong>
                        </li>
                        <li><a href="{{ route('adminAllTestimonials') }}">All Testimonials</a></li>
                        <li><a href="{{ route('adminNewTestimonial') }}">Add New Testimonial</a></li>
                        <li>
                            <hr>
                            <strong>Contact</strong>
                        </li>
                        <li><a href="{{ route('adminAllContactFormSubmissions') }}">Contact Form Submissions</a></li>
                        <li>
                            <hr>
                            <strong>Subscriptions</strong>
                        </li>
                        <li><a href="{{ route('adminAllSubscriptions') }}">All Subscriptions</a></li>
                        <li>
                            <hr>
                        <li><a href="{{ route('home') }}">Quit</a>
                        </li>
                    </ul>
                </section>

                <section style="margin-top:2em;width:75%;float:right;">
                        @yield('content')
                </section>
        </section>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
