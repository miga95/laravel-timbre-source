@extends('app')
@section('content')
    <main>
        <div class="w-75  mx-auto mt-10">
            <h2 class="text-center">{{__("557ème Vente sur Offre")}}</h2>
            <hr class="w-25">
            <p class="text-center">{{__("La Vente sur Offre NO 255 est organisée par Lorem ipsum dolor
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                Nous informons notre clientèle que les ordres seront reçus  au mardi jusqu'à mardi 9 juin 2035 à 19h.
                Les listes des résultats et des lots invendus , disponibles au prix de départ seront consultables à partir du mercredi 10 juin 2020 à 19h.")}}
            </p>
        </div>
        <div class="container container-fluid d-flex justify-content-around mt-10">
            <div class="container d-flex justify-content-center">
                <div>
                    <h3 class=" mb-3 text-center">{{__("France")}}</h3>
                    <img src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" >
                    <div>
                        <ul class="mt-5">
                            <li>Ceres</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <div>
                    <h3 class="mb-3 text-center">{{__("Colonie française")}}</h3>
                    <img src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" >
                    <div>
                        <ul class="mt-5">
                            <li>Ceres</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <div>
                    <h3 class="mb-3 text-center">Pays divers</h3>
                    <img src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" >
                    <div>
                        <ul class="mt-5">
                            <li>Ceres</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Exposition de lots--}}
        <div class="w-75  mx-auto mt-10">
            <h2 class="text-center">Expositions des lots</h2>
            <hr class="w-25">
            <p class="text-center">Nous exposons des lots sur RDV, dès réception du catalogue. UT wisi  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                Pendant la durée de l'exposition et sous réserve de modifications sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
            </p>
            <a href="" class="d-block btn mx-auto w-25 mt-5" style="background-color: #5F0137; color: white">Consulter notre catalogue</a>
            {{-- timbres --}}
            <div class="mt-10">
                <div class=" w-50 mx-auto d-flex justify-content-around ">
                    <img src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" class="text-center">
                    <div>
                        <a href="" class="text-center"><i class="fas fa-glasses"></i></a>
                        <p>France</p>
                        <p>LOTS 1 à 1338</p>
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
