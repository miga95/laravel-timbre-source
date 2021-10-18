@extends('app')
@section('content')
<main>
    <div class="w-3/5 mx-auto my-12">
        <h1 class="text-center text-4xl text-purple-400 py-3">{{$lastVente->numeroVente}}ème Vente sur Offre</h1>
        <hr class="w-12 mx-auto text-purple-600">
        <p class="text-xl text-justify py-8">{{$lastVente->info}}</p>

    </div>

    <iframe class="mx-auto" width="400px" height="400px" src="//v.calameo.com/?bkcode=0056441891efa46152f4c&mode=mini&clickto=embed" frameborder="0"></iframe>
    <a class="mt-7 block text-center text-red-400" href="{{route('download-catalogue')}}">Cliquez ici pour telecharger le catalogue pdf de la vente</a>

    <!-- Surcategories-->
    <div class="w-3/5  mx-auto my-12 flex justify-around ">
        @foreach($surcategories as $surcategorieId => $value)
        <div class="w1/3">
            <h2 class=" mb-3 text-center text-2xl text-black">
                <a href={{route('show-surcategories-of-last-vente',[
                    'venteId' => $lastVente->getId(),
                    'surcategorieId' => $surcategorieId,
                    'categorieId' => $value["categories"][0]->getId()
                     ])}}>{{$value['name']}}</a>
{{--                <a href="https://www.roumet.com">{{$surcategorie['name']}}</a>--}}
            </h2>
            <img class="mx-auto" src="{{asset('img/timbres/black-penny-timbre-rare-philatelie-investissement.jpg')}}" alt="" width="150px" >
        </div>
        @endforeach
    </div>


{{-- Exposition de lots--}}
    <div class="w-3/5  mx-auto my-20">
        <h1 class="text-center text-4xl text-purple-400 py-3">{{__('Expositions des lots')}}</h1>
        <hr class="w-12 mx-auto">
        <p class="text-xl text-justify py-8">{{__("Nous exposons des lots sur RDV, dès réception du catalogue. UT wisi  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
            Pendant la durée de l'exposition et sous réserve de modifications sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam")}}
        </p>
        <a href="https://wwww.roumet.com" class="block w-1/4 bg-pink-800 text-xl text-white text-center mx-auto p-2 rounded-lg" >{{__("Consulter notre catalogue")}}</a>
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

    <div class="w-3/5 mx-auto">
        <h1 class="text-center text-4xl text-purple-400 py-3">Lorem ipsum dolor - Rodau clamsdun rio</h1>
        <hr class="w-12 mx-auto text-purple-400 ">

        <div class="splide py-8">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($lastLots as $lastLot)
                        <li class="splide__slide"><a href="{{route('show-lot',['id' => $lastLot->getId()])}}"><img
                                    src="{{asset('storage/timbres/'.$lastLot->photo) }}" width="60%" alt=""></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <a href="{{route('register')}}" class="block w-1/4 bg-pink-800 text-xl text-white text-center mx-auto p-2 rounded-lg my-8">Créer
            mon compte gourmet</a>
    </div>

</main>
@endsection
