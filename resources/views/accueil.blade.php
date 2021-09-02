@extends('app')
@section('content')
<main>
    <div class=" flex justify-center my-12">
        <img src="{{asset('img/expertise1.jpg')}}" alt="" width="500px" height="400px" class=" rounded">
        <img src="{{asset('img/magasin.jpg')}}" alt="" width="500px" height="400px" class=" rounded">
    </div>


    <div class="w-3/5 mx-auto my-12">
        <h1 class="text-center text-4xl text-purple-400 py-3">Maison Roumet - Passion pour les timbres</h1>
        <hr class="w-12 mx-auto text-purple-600">
        <p class="text-xl text-justify py-8">La Maison Roumet est née de la passion pour les timbres.
            Depuis 125 ans, la société Roumet aide aux collectionneurs passionés à acquérir et à vendre les belles pièces ou des collection entières.
            Nous travaillons de manière discrète et transparente avec les acheteurs et les vendeurs de timbres tout au long de l'année, indépendamment du calendrier des ventes. Notre équipe apporte des décennies d'expertise et de passion à chaque interaction, soutenue par une connaissance inégalée de philatélie et du marché.
            Que vous recherchiez un timbre spécifique pour votre collection grandissante ou que vous souhaitiez vendre, nous sommes prêts à trouver, vendre, conseiller et expertiser les timbres.
            En fonction de votre centre d'intérêt, veuillez nous contacter dès aujourd'hui pour en savoir plus sur nos offres actuelles ou pour savoir comment nous pouvons vous aider avec vos besoins.
        </p>
    </div>



    <div class="w-3/5 mx-auto my-12">
        <div class="">
            <h1 class="text-center  text-4xl text-purple-400 py-3">Octave Roumet - créateur des Ventes Sur Offres</h1>
            <hr class="w-12 mx-auto text-purple-400">
            <p class="text-xl text-justify py-8">La Vente sur Offre c'est le système crée par Octave Roumet en 1927.
                Depuis 125 ans, la société Roumet aide aux collectionneurs passionés à acquérir et à vendre les belles pièces ou des collection entières.
                Nous travaillons de manière discrète et transparente avec les acheteurs et les vendeurs de timbres tout au long de l'année, indépendamment du calendrier des ventes. Notre équipe apporte des décennies d'expertise et de passion à chaque interaction, soutenue par une connaissance inégalée de philatélie et du marché.
            </p>
        </div>
        <a href="" class="block w-1/4 bg-pink-800 text-xl text-white text-center mx-auto p-2 rounded-lg" >Nous contacter</a>
    </div>

    <div class="w-3/5 mx-auto">
        <h1 class="text-center text-4xl text-purple-400 py-3">Lorem ipsum dolor - Rodau clamsdun rio</h1>
        <hr class="w-12 mx-auto text-purple-400 ">

        <div class="splide py-8">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="{{asset('img/magasin.jpg')}}" alt=""></li>
                    <li class="splide__slide"><img src="{{asset('img/magasin.jpg')}}" alt=""></li>
                    <li class="splide__slide"><img src="{{asset('img/magasin.jpg')}}" alt=""></li>
                </ul>
            </div>
        </div>
        <a href="" class="block w-1/4 bg-pink-800 text-xl text-white text-center mx-auto p-2 rounded-lg my-8" >Créer mon compte gourmet</a>
    </div>
</main>
@endsection
