@extends('app')
@section('content')
    <main class="mt-36">
        {{--titre avec image a gauche--}}
        <div class="w-3/5 mx-auto my-12 flex justify-center">
            <img class="mr-5 pb-3" src="{{asset('img/collection.png')}}" alt="" width="60px" height="70px">
            <div>
                <h1 class="text-center text-4xl text-purple-400 py-3 pt-5">{{__("Maison Roumet - 125 ans d'histoire")}}</h1>
                <hr class="w-12 mx-auto text-purple-600">
            </div>
        </div>
        {{--image et dates--}}
        <div class="w-3/5 mx-auto my-12">
            <img class="mx-auto" src="{{asset('img/magasinSansCouleur.jpg')}}" alt="">
            <div class="w-3/5 mx-auto my-20">
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1890</p>
                    <p class="text-sm">{{__("Octave Roumet s'intéresse à la Philatélie grâce à son oncle
                        Victor Robert - membre fondateur de la revue Philatélique")}}
                    </p>
                </div>
                <div class="flex justify-end items-center my-1">
                    <p class="text-sm text-pink-900">{{__("Octave Roumet crée la société Roumet")}}</p>
                    <p class="text-6xl text-pink-900 px-3">1896</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1910</p>
                    <p class="text-sm">{{__("Ouverture de la première boutique au 1bis boulevard des Italiens à Paris")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1914</p>
                    <p class="text-sm">{{__("La guerre - Octave Roumet est mobilisé, La Maison Roumet est fermée jusqu'à
                        1918")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1923</p>
                    <p class="text-sm">{{__("Octave Roumet devient expert près le tribunaux de Paris")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1927</p>
                    <p class="text-sm">{{__("Création de système de vente aux offres, appliquées ensuite par les autres
                        maisons philatéliques")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1929</p>
                    <p class="text-sm">{{__("Octave Roumet s'installe au 17 rue DROUOT près de Hôtel de Ventes Drouot")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1939</p>
                    <p class="text-sm">{{__("Philippe Roumet commence à travailler aux côtés de son père")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1943</p>
                    <p class="text-sm">{{__("Philippe Roumet quitte la France et devient membre d'escadrille Lafayette")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1953</p>
                    <p class="text-sm">{{__("Décès d'Octave Roumet, son fils Philippe assume la direction de la société,
                        Philippe Roumet est nommé expert près des tribunaux français")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1960</p>
                    <p class="text-sm">{{__("Philippe Roumet nommé expert honoraire près la Cour d'appel de Paris")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1975</p>
                    <p class="text-sm">{{__("Alexandre Roumet rejoint la société et devient le président de la société
                        Roumet")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1985</p>
                    <p class="text-sm">{{__("Jean Marc Guedon rejoint notre équipe")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1992</p>
                    <p class="text-sm">{{__("Alexandre Roumet devient membre de la Compagnie des Experts près la Cour d'appel
                        et le tribunal de grande instance")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">1995</p>
                    <p class="text-sm">{{__("Premières affaires avec Christian Pagnoux")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">2001</p>
                    <p class="text-sm">{{__("Didier Petithomme rejoint l'équipe")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">2005</p>
                    <p class="text-sm">{{__("Alexandre Roumet s'associe avec Christian pour créer la RHP - Roumet Historie
                        Postale")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">2006</p>
                    <p class="text-sm">{{__("La maison Roumet réalise sa 500ème vente sur offre")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">2007</p>
                    <p class="text-sm">{{__("Gwenael Roumet commence son aventure philatélique à la maison Roumet")}}</p>
                </div>
                <div class="flex my-1">
                    <p class="text-3xl text-pink-900 px-3">2021</p>
                    <p class="text-sm">{{__("Bientôt la maison Roumet soufflera ses 125 des bougies")}}</p>
                </div>
                {{--<div class=" my-1">
                    <p class="text-lg text-pink-900 px-3">{{__("Nous remercions à notre clientèle et nos collaborateurs pour
                        cette belle histoire")}}</p>
                </div>--}}

            </div>

            {{--<div class="w-3/5 mx-auto my-12">
                <div class=" flex items-end">
                    <img class="" src="{{asset('img/octave.png')}}" alt="" width="100px">
                    <div>
                        <h1 class="text-center text-4xl text-purple-400 py-3 pt-5">Octave Roumet</h1>
                        <hr class="w-12 mx-auto text-purple-600">
                    </div>
                </div>

                <p class="text-xl text-justify py-8">{{__("L'Histoire de la Maison Roumet commence en 1880 quand le jeune
                    Octave voit les collections des timbres crées par son oncle Victor Robert ...
                    Quand Octave ouvre en 1896 sa société dans une chambre de bonne au ....., il vient à peine d'avoir
                    18 ans et termine tout juste son apprentissage. Mais le jeune philatéliste séduit déjà par son
                    talent. Quatre ans plus tard, c'est la consécrationXXX.
                    Octave Roumet... Passage des Princes et installe la maison qui porte son nom. Le succès est immédiat
                    et les Parisiens affluent chez 'Roumet'.")}}
                </p>
            </div>--}}
        </div>
    </main>
@endsection
