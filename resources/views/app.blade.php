<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devic e-width, initial-scale=1">

        <title>Roumet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Fortawesome -->
        <link rel="stylesheet" href="{{asset('@fortawesome/fontawesome-free/css/all.min.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('css/perso.css')}}">
        <!-- Slider css -->
        <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">


    </head>
    <body class="container mx-auto pb-5 ">
        @include('nav')
        @yield('content')
        <footer>

        </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/splide.js') }}"></script>
    </body>
</html>
