<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devic e-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Roumet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="icon" href="{{ asset('img/logo_R_noir.png') }}">
        <!-- Fortawesome -->
        <link rel="stylesheet" href="{{asset('@fortawesome/fontawesome-free/css/all.min.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('css/perso.css')}}">
        <!-- Slider css -->
        <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">

    </head>

    <body class="container mx-auto ">
        @if(session()->get('robot'))
            {{dd('Bloqué')}}
{{--            {{session()->put(['robot'=>false])}}--}}
        @endif
        <a href="{{route('suspect')}}" class="block" style="width: 1px; height: 1px"><img src="{{asset('img/magasin.jpg')}}f" width="1px" height="1px" border="0"></a>
        @include('nav')

        @yield('content')
        <footer>
            @include('footer')
        </footer>

        <script src="{{ asset('js/app.js') }}"></script>
{{--        <script src="{{ asset('js/splide.js') }}"></script>--}}
        <script>
            @if(session('success'))
            toastr.success("{!! session('success') !!}")
            @endif
            @if(session('warning'))
            toastr.warning("{!! session('warning') !!}")
            @endif
            @if(session('error'))
            toastr.error("{!! session('error') !!}")
            @endif

            var url = "{{ route('changeLang') }}";
            var element = document.getElementById("changeLang")
            console.log(element.value)
            element.addEventListener("change", function(){
                window.location.href = url + "?lang="+ this.value;
            });
        </script>

    </body>
</html>
