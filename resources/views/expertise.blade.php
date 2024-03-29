@extends('app')
@section('content')
    <div class="mt-36">
        <img class="mx-auto" src="{{asset('img/expertise1.jpg')}}" alt="" width="50%">
    </div>
    {{--    espertise philatélique--}}
    <div class="w-3/5 mx-auto my-20">
        <h1 class="text-center text-4xl text-purple-400 py-3">{{__("Expertise philatélique")}}</h1>
        <hr class="w-28 mx-auto text-purple-400">
        <p class="text-xl text-justify py-8">{{__("L'Expertise consiste à déterminer précisément l'état civil d'un timbre : le
            numéro de timbre suivant un catalogue, son état, sa couleur, et son authenticité.
            Afin d'effectuer l'expertise de vos timbres ou lettres dans les meilleures conditions, voici ces quelques
            informations :
            Les pièces à expertiser peuvent être expédiées par la voie postale ou déposées directement dans nos bureaux.
            Si vous déposez les pièces à expertiser directement dans nos bureaux au 17 rue Drouot, le résultat de
            l'expertise vous sera communiqué dans la plupart des cas sous 24 heures. Pour les examens plus complexes les
            délais peuvent être modifiés.
            Si vous expédiez vos timbres par la voie postale, effectuez l'envoi avec protection efficace, par lettre
            recommandée ou valeur déclarée avec avis de réception.")}}
        </p>
    </div>
    {{--    Experts de la maison roumet--}}
    <div class="w-3/4 mx-auto my-20">
        <h1 class="text-center text-4xl text-purple-400 py-3">{{__("Experts de la Maison Roumet")}}</h1>
        <hr class="w-28 mx-auto text-purple-400 ">

        <h2 class="text-center text-2xl mt-12">{{__("Alexandre Roumet")}}</h2>
        <p class="text-center italic">{{__("Expert à la cour d'appel de Paris")}}</p>

        <h2 class="text-center text-2xl mt-12">{{__("Philippe Roumet (1921 - 2010)")}}</h2>
        <p class="text-center italic">{{__("Expert à la cour d'appel de Paris")}}</p>
        <p class="text-center italic">{{__("Expert près de Tribunal")}}</p>
        <p class="text-center italic">{{__("de Grande Instance de la Seine")}}</p>

        <h2 class="text-center text-2xl mt-12">{{__("Octave Roumet (1879 - 1953)")}}</h2>
        <p class="text-center italic">{{__("Expert à la cour d'appel de Paris")}}</p>
        {{--<a href="" class="block w-1/5 bg-pink-800 text-xl text-white text-center mx-auto p-2 rounded-lg my-12">Commander un expert</a>--}}

    </div>

    <div class="w-3/5 mx-auto my-20">
        <h1 class="text-center  text-4xl text-purple-400 py-3">{{__("Certificat d'authenticité")}}</h1>
        <hr class="w-28 mx-auto text-purple-400">
        <p class="text-xl text-justify py-8">{{__("Lorem ipsum dolor sit ameti , consectetuer adpiscing eluit, sed diam
            nonummy nibh
            eioiv")}}</p>
    </div>

    <div class="w-3/5 mx-auto my-12">
        <h1 class="text-center  text-4xl text-purple-400 py-3">{{__("Questions fréquentes")}}</h1>
        <hr class="w-28 mx-auto text-purple-400">
        <div class="my-12">
            <div class="flex justify-between">
                <p style="font-size: 1.5rem">{{__("Qu'est-ce qu'une demande d'estimation ?")}}</p>
                {{--<a class="text-right" href=""><i class="fas fa-plus"></i></a>--}}
            </div>
            <hr>
            <div class="flex justify-between">
                <p style="font-size: 1.5rem">{{__("Comment sont déterminées les estimations ?")}}</p>
                {{--<a class="text-right" href=""><i class="fas fa-plus"></i></a>--}}
            </div>
            <hr>
            <div class="flex justify-between">
                <p style="font-size: 1.5rem">{{__("En combien de temps reçois-je une estimation ?")}}</p>
                {{--<a class="text-right" href=""><i class="fas fa-plus"></i></a>--}}
            </div>
            <hr>
            <div class="flex justify-between">
                <p style="font-size: 1.5rem">{{__("J'ai bien envoyé une requête, mais je n'ai pas reçu d'estimation. Pourquoi
                    ?")}}</p>
                {{--<a class="text-right" href=""><i class="fas fa-plus"></i></a>--}}
            </div>
            <hr>
            <div class="flex justify-between">
                <p style="font-size: 1.5rem">{{__("L'estimation fournie est-elle définitive ?")}}</p>
                {{--<a class="text-right" href=""><i class="fas fa-plus"></i></a>--}}
            </div>
            <hr>
            <div class="flex justify-between">
                <p style="font-size: 1.5rem">{{__("Est-ce possible de demander une estimation même si je ne suis pas sûr de
                    vendre mes
                    timbres ?")}}</p>
                {{--<a class="text-right" href=""><i class="fas fa-plus"></i></a>--}}
            </div>
            <hr>
            <div class="flex justify-between">
                <p style="font-size: 1.5rem">{{__("Quelles sont les conditions de vente de la Maison Roumet ?")}}</p>
                {{--<a class="text-right" href=""><i class="fas fa-plus"></i></a>--}}
            </div>

        </div>
    </div>
@endsection
