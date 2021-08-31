@extends('app')
@section('content')
<main>
    <div class=" slider mt-5 d-flex justify-content-center ">
        <img src="{{asset('img/expertise1.jpg')}}" alt="" width="500px" height="400px" class=" rounded">
        <img src="{{asset('img/magasin.jpg')}}" alt="" width="500px" height="400px" class=" rounded">
    </div>

    <div class="d-flex justify-content-center mt-5 mb-5">
        <div class="w-50">
            <h2>Maison Roumet - Passion pour les timbres</h2>
            <hr class="w-50">
            <p>La Maison Roumet est née de la passion pour les timbres.
                Depuis 125 ans, la société Roumet aide aux collectionneurs passionés à acquérir et à vendre les belles pièces ou des collection entières.
                Nous travaillons de manière discrète et transparente avec les acheteurs et les vendeurs de timbres tout au long de l'année, indépendamment du calendrier des ventes. Notre équipe apporte des décennies d'expertise et de passion à chaque interaction, soutenue par une connaissance inégalée de philatélie et du marché.
                Que vous recherchiez un timbre spécifique pour votre collection grandissante ou que vous souhaitiez vendre, nous sommes prêts à trouver, vendre, conseiller et expertiser les timbres.
                En fonction de votre centre d'intérêt, veuillez nous contacter dès aujourd'hui pour en savoir plus sur nos offres actuelles ou pour savoir comment nous pouvons vous aider avec vos besoins.
            </p>
        </div>

    </div>

    <div class="container mt-5 d-flex-column justify-content-center w-75">
        <div class="container container-fluid">
            <h2 class="text-center">Octave Roumet - créteur des Ventes Sur Offres</h2>
            <hr class="w-50">
            <p>La Vente sur Offre c'est le système crée par Octave Roumet en 1927.
                Depuis 125 ans, la société Roumet aide aux collectionneurs passionés à acquérir et à vendre les belles pièces ou des collection entières.
                Nous travaillons de manière discrète et transparente avec les acheteurs et les vendeurs de timbres tout au long de l'année, indépendamment du calendrier des ventes. Notre équipe apporte des décennies d'expertise et de passion à chaque interaction, soutenue par une connaissance inégalée de philatélie et du marché.
            </p>
        </div>
        <a href="" class="d-block btn mx-auto w-25 mt-5" style="background-color: #5F0137; color: white">Nous contacter</a>
    </div>

    <div class="container container-fluid mt-5 w-75">
        <h2 class="text-center">Lorem ipsum dolor - Rodau clamsdun rio</h2>
        <hr class="w-50">

        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="{{asset('img/magasin.jpg')}}" alt=""></li>
                    <li class="splide__slide"><img src="{{asset('img/magasin.jpg')}}" alt=""></li>
                    <li class="splide__slide"><img src="{{asset('img/magasin.jpg')}}" alt=""></li>
                </ul>
            </div>
        </div>

        <a href="" class="d-block btn mx-auto w-25 mt-5" style="background-color: #5F0137; color: white">Créer mon compte gourmet</a>
    </div>
</main>
@endsection
