@extends('app')
@section('content')
<main>
    <div class="w-3/5 mx-auto my-12">
        <h1 class="text-center text-4xl text-purple-400 py-3">557ème Vente sur Offre</h1>
        <hr class="w-12 mx-auto text-purple-600">
        <p class="text-xl text-justify py-8">La Vente sur Offre NO 255 est organisée par Lorem ipsum dolor
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
            Nous informons notre clientèle que les ordres seront reçus  au mardi jusqu'à mardi 9 juin 2035 à 19h.
            Les listes des résultats et des lots invendus , disponibles au prix de départ seront consultables à partir du mercredi 10 juin 2020 à 19h.
        </p>
    </div>
    <!-- 3 timbres-->
    <div class="w-3/5 mx-auto my-12 flex justify-around ">
        <div class="w1/3">
            <h2 class=" mb-3 text-center text-2xl text-black">France</h2>
            <img class="mx-auto" src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" >

            <ul class="mt-5">
                <li class="text-center text-xl">Ceres</li>
            </ul>
        </div>
        <div class="w1/3">
            <h2 class=" mb-3 text-center text-2xl text-black">Colonie française</h2>
            <img class="mx-auto" src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" >

            <ul class="mt-5">
                <li class="text-center text-xl">Ceres</li>
            </ul>
        </div>
        <div class="w1/3">
            <h2 class=" mb-3 text-center text-2xl text-black">Pays divers</h2>
            <img class="mx-auto" src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" >

            <ul class="mt-5">
                <li class="text-center text-xl">Ceres</li>
            </ul>
        </div>
    </div>

{{-- Exposition de lots--}}
    <div class="w-3/5  mx-auto my-20">
        <h1 class="text-center text-4xl text-purple-400 py-3">Expositions des lots</h1>
        <hr class="w-12 mx-auto">
        <p class="text-xl text-justify py-8">Nous exposons des lots sur RDV, dès réception du catalogue. UT wisi  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
            Pendant la durée de l'exposition et sous réserve de modifications sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
        </p>
        <a href="" class="block w-25 bg-pink-800 text-xl text-white text-center mx-auto p-2 rounded-lg" >Consulter notre catalogue</a>
{{-- timbres --}}
        <div class="w-3/5 mx-auto my-20">
            <div class=" flex justify-around py-10">
                <img src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" class="text-center">
                <div class="flex flex-col justify-center">
                    <a href="" class="block text-center text-xl"><i class="fas fa-glasses"></i></a>
                    <p class="text-center text-xl">France</p>
                    <p class="text-center text-xl">LOTS 1 à 1338</p>
                </div>
            </div>
            <div class="flex justify-around py-10">
                <img src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" class="text-center">
                <div class="flex flex-col justify-center">
                    <a href="" class="block text-center text-xl"><i class="fas fa-glasses"></i></a>
                    <p class="text-center text-xl">France</p>
                    <p class="text-center text-xl">LOTS 1 à 1338</p>
                </div>
            </div>
            <div class=" flex justify-around py-10 ">
                <img src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" class="text-center">
                <div class="flex flex-col justify-center">
                    <a href="" class="block text-center text-xl"><i class="fas fa-glasses"></i></a>
                    <p class="text-center text-xl">France</p>
                    <p class="text-center text-xl">LOTS 1 à 1338</p>
                </div>
            </div>
        </div>
    </div>

    <div class="splide mt-10 d-flex justify-content-center"  >
        <div class="splide__track" style="width: 50rem; height: 20rem;">
            <ul class="splide__list">
                <li class="splide__slide"><img src="{{asset('img/timbres/napol.jpg')}}" alt=""></li>
                <li class="splide__slide"><img src="{{asset('img/magasin.jpg')}}" alt=""></li>
                <li class="splide__slide"><img src="{{asset('img/magasin.jpg')}}" alt=""></li>
            </ul>
        </div>
    </div>

</main>
@endsection
