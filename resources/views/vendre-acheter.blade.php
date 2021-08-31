@extends('app')
@section('content')
    <main>
        <div class="w-75  mx-auto mt-5">
            <h2 class="text-center">Pourquoi confier votre collection à la Maison Roumet?</h2>
            <hr class="w-25">
            <p class="">Depuis 1896, la maison Roumet a bâti sa réputation sur l'excellence de ses experts et leur connaissance profonde du marché. En travaillant avec Roumet, vous bénéficierez des meilleurs services:
                Une Expérience complète et transparente, de votre première requête en ligne jusqu'au paiement final.
                Une équipe spécialisé avec des connaissance profondes du marché philatélie.
                Des propositions marketing ciblées pour vendre au mieux votre collection.
                Si vous souhaitez vendre seulement une partie de votre collection, nous pouvons organiser pour vous une vente sur mesure.
            </p>
            <a href="" class="d-block btn mx-auto w-25 mt-5" style="background-color: #5F0137; color: white">Vendre avec nous</a>
        </div>
        <div class="w-75  mx-auto mt-5">
            <h2 class="text-center mt-10">Vous avez une collection à estimer?</h2>
            <hr class="w-25">
            <p class="">L'Estimation philatélique détermine la valeur commerciale d'un timbre ou de la collection.
                Cette valeur correspond au prix d'achat du timbre ou de la collection par la maison Roumet en parfait adéquation avec le marché philatélique du moment.
                Nous vous recevrons dans nos bureaux, après prise de rendez-vous, afin d'établir une estimation.
                Dans le cas où vous êtes dans l'impossibilité de vous déplacer, n'hésitez pas à nous contacter pour nous interroger.
                Obtenir une estimation de vos timbres en ligne
            </p>

            <h2 class="text-center mt-10">Obtenir une estimation de vos timbres en ligne</h2>
            <hr class="w-25">
            <p class="">L'Estimation en ligne est le moyen efficace crée pour satisfaire nos clients. Lorem Ipsum dolor qurhfmd
            <a href="" class="d-block btn mx-auto w-25 mt-5" style="background-color: #5F0137; color: white">Vendre avec nous</a>
        </div>

        <div class="w-75  mx-auto mt-5">
            <h2 class="text-center">Il est très facile d'obtenir une estimation</h2>
            <hr class="w-25">
            <div class="d-flex mt-5">
                <div class="">
                    <p class="text-center">Soumettre des photographies de votre timbre</p>
                    <div class="text-center">
                        <img src="{{asset("img/timbre_contour.png")}}" alt="" width="150px">
                    </div>
                </div>
                <div class="">
                    <p class="text-center">Fournir des informations</p>
                    <div class="text-center">
                        <img src="{{asset("img/timbre_contour.png")}}" alt="" width="150px">
                    </div>
                </div>
                <div class="">
                    <p class="text-center">Vérifier et envoyer votre demande</p>
                    <div class="text-center">
                        <img src="{{asset("img/timbre_contour.png")}}" alt="" width="150px">
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
