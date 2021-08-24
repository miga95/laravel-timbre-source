@extends('app')

@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <img src="{{asset('img/expertise1.jpg')}}" alt="" width="80%" height="500px">
    </div>
{{--    espertise philatélique--}}
    <div class="w-50  mt-5 pt-4 mx-auto">
        <h1 class="text-center">Expertise philatélique</h1>
        <hr class="w-25">
        <p class="text-center" >L'Expertise consiste à déterminer précisément l'état civil d'un timbre : le numéro de timbre suivant un catalogue, son état, sa couleur, et son authenticité.
            Afin d'effectuer l'expertise de vos timbres ou lettres dans les meilleures conditions, voici ces quelques informations :
            Les pièces à expertiser peuvent être expédiées par la voie postale ou déposées directement dans nos bureaux.
            Si vous déposez les pièces à expertiser directement dans nos bureaux au 17 rue Drouot, le résultat de l'expertise vous sera communiqué dans la plupart des cas sous 24 heures. Pour les examens plus complexes les délais peuvent être modifiés.
            Si vous expédiez vos timbres par la voie postale, effectuez l'envoi avec protection efficace, par lettre recommandée ou valeur déclarée avec avis de réception.
        </p>
    </div>
    {{--    experts de la maison roumet--}}
    <div class="w-75  mt-5 pt-4 mx-auto">
        <h1 class="text-center">Experts de la Maison Roumet</h1>
        <hr class="w-25 ">
        <div>
            <h3 class="text-center" style="margin-bottom: 0; ">Alexandre Roumet</h3>
            <p class="text-center" style="font-style: italic"> Expert à la cour d'appel de Paris</p>

            <h3 class="text-center" style="margin-bottom: 0;">Philippe Roumet (1921 - 2010)</h3>
            <p class="text-center" style="font-style: italic; margin-bottom: 0"> Expert à la cour d'appel de Paris</p>
            <p class="text-center" style="font-style: italic; margin-bottom: 0"> Expert près de Tribunal</p>
            <p class="text-center" style="font-style: italic">   de Grande Instance de la Seine</p>

            <h3 class="text-center" style="margin-bottom: 0;">Octave Roumet (1879 - 1953)</h3>
            <p class="text-center" style="font-style: italic"> Expert à la cour d'appel de Paris</p>

            <a href="" class="d-block btn mx-auto w-25 mt-5" style="background-color: #5F0137; color: white">Commander un expert</a>
        </div>

    </div>

    <div class="container mt-10 w-50">
        <h1 class="text-center">Certificat d'authenticité</h1>
        <hr class="w-25">
        <p class="text-center">Lorem ipsum dolor sit ameti , consectetuer adpiscing eluit, sed diam nonummy nibh eioiv</p>
    </div>

    <div class="container container-fluid d-flex-column mt-10">
        <h1 class="text-center">Questions fréquentes</h1>
        <hr class="w-25 mb-5">
        <p style="font-size: 1.5rem">Qu'est-ce qu'une demande d'estimation ?</p>
        <hr class="">
        <p style="font-size: 1.5rem">Comment sont déterminées les estimations ?</p>
        <hr class="">
        <p style="font-size: 1.5rem">En combien de temps reçois-je une estimation ?</p>
        <hr class="">
        <p style="font-size: 1.5rem">J'ai bien envoyé une requête, mais je n'ai pas reçu d'estimation. Pourquoi ?</p>
        <hr class="">
        <p style="font-size: 1.5rem">L'estimation fournie est-elle définitive ?</p>
        <hr class="">
        <p style="font-size: 1.5rem">Est-ce possible de demander une estimation même si je ne suis pas sûr de vendre mes timbres ?</p>
        <hr class="">
        <p style="font-size: 1.5rem">Quelles sont les conditions de vente de la Maison Roumet ?</p>
    </div>
@endsection
