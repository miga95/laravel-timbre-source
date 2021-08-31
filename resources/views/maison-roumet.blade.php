@extends('app')
@section('content')
    <main>
        <div class="d-flex justify-content-center w-75  mx-auto mt-5">
            <div>
                <img src="{{asset('img/collection.png')}}" alt="" width="50px" height="70px">
            </div>
            <div>
                <h2 class="text-center">Maison Roumet - 125 ans d'histoire</h2>
                <hr class="w-25">
            </div>
        </div>
         {{--image--}}
        <div class="w-75 mx-auto mt-3">
            <div class="text-center">
                <img src="{{asset('img/magasinSansCouleur.jpg')}}" alt="">
            </div>
        </div>
        {{--Dates--}}

    </main>
@endsection
