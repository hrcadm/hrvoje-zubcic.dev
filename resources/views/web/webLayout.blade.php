<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
@include('web.partials.navbar')

@yield('content')

@include('web.partials.footer')

<script src="{{ asset('js/scripts.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script><!-- Modernizer -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script><!-- Script -->
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- Owl Carousal -->
{{--<script type="text/javascript" src="{{ asset('js/html5lightbox.js') }}"></script><!-- HTML -->--}}
<script type="text/javascript" src="{{ asset('js/scrolltopcontrol.js') }}"></script><!-- ScrolltoTop -->
<script type="text/javascript" src="{{ asset('js/scrolly.js') }}"></script><!-- Parallax -->

</body>
</html>