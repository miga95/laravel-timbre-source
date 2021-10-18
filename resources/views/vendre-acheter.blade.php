@extends('app')
@section('content')
    <main class="mt-36">
        <div class="w-3/5 mx-auto my-20">
            <h1 class="text-center  text-4xl text-purple-400 py-3">{{__("Pourquoi confier votre collection à la Maison
                Roumet?")}}</h1>
            <hr class="w-12 mx-auto text-purple-400">
            <p class="text-xl text-justify py-8">
                {{__("Depuis 1896, la maison Roumet a bâti sa réputation sur l'excellence de ses experts et leur connaissance
                profonde du marché. En travaillant avec Roumet, vous bénéficierez des meilleurs services: Une Expérience
                complète et transparente, de votre première requête en ligne jusqu'au paiement final. Une équipe
                spécialisé avec des connaissance profondes du marché philatélie. Des propositions marketing ciblées pour
                vendre au mieux votre collection. Si vous souhaitez vendre seulement une partie de votre collection,
                nous pouvons organiser pour vous une vente sur mesure.")}}
            </p>
            <a href="{{route('contact')}}" class="block w-1/4 bg-pink-800 text-xl text-white text-center mx-auto my-12 p-2 rounded-lg hover:bg-pink-700">{{__("Nous contacter")}}</a>
        </div>
        <div class="w-3/5 mx-auto my-20 grid grid-cols-2">
            <div class="p-3">
                <h1 class="text-center  text-xl text-purple-400 py-3">{{__("Vous avez une collection à estimer?")}}</h1>
                <hr class="w-12 mx-auto text-purple-400">
                <p class="text-xl text-center py-8">
                    {{__("L'Estimation philatélique détermine la valeur commerciale d'un timbre ou de la collection. Cette valeur
                    correspond au prix d'achat du timbre ou de la collection par la maison Roumet en parfait adéquation avec
                    le marché philatélique du moment. Nous vous recevrons dans nos bureaux, après prise de rendez-vous, afin
                    d'établir une estimation. Dans le cas où vous êtes dans l'impossibilité de vous déplacer, n'hésitez pas
                    à nous contacter pour nous interroger. Obtenir une estimation de vos timbres en ligne.")}}
                </p>
            </div>
            <div class="p-3">
                <h1 class="text-center  text-xl text-purple-400 py-3">{{__("Obtenir une estimation de vos timbres en ligne")}}</h1>
                <hr class="w-12 mx-auto text-purple-400">
                <p class="text-xl text-center py-8">
                    {{--L'estimation en ligne est le moyen efficace crée pour satisfaire nos clients .--}}
                    {{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias animi aspernatur culpa, cum ea eius
                    maxime minus nam perferendis porro quaerat quod quos sed vel velit voluptatem voluptates voluptatum.")}}
                </p>
            </div>

        </div>


        <div class="w-3/5 mx-auto">
            <h1 class="text-center text-4xl text-purple-400 py-3">{{__("Il est très facile d'obtenir une estimation")}}</h1>
            <hr class="w-12 mx-auto text-purple-400 ">

            <div class="grid grid-cols-3 my-12 ">
                <div class="">
                    <p class="text-center mb-2">{{__("Soumettre des photographies")}} <br> {{__("de votre timbre")}}</p>
                    <img class="mx-auto" src="{{asset("img/timbre_contour.png")}}" alt="" width="150px">

                </div>
                <div class="">
                    <p class="text-center mb-2">{{__("Fournir des informations")}} <br> {{__("des informations")}} </p>
                    <img class="mx-auto" src="{{asset("img/timbre_contour.png")}}" alt="" width="150px">
                </div>
                <div class="">
                    <p class="text-center mb-2">{{__("Vérifier et envoyer")}} <br> {{__("votre demande")}}</p>
                    <img class="mx-auto" src="{{asset("img/timbre_contour.png")}}" alt="" width="150px">
                </div>
            </div>
        </div>
    </main>
@endsection
