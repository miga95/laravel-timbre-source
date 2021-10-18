@extends('app')
@section('content')
    <main class="mt-36">
        <div class="w-3/5 mx-auto my-12">
            <h1 class="text-center text-4xl text-purple-400 py-3">{{$lastVente->numeroVente}}ème Vente sur Offre -
                Catalogue</h1>
            <hr class="w-12 mx-auto text-purple-600">
            <p class="text-center text-xl text-justify py-8">{{$lastVente->info}}</p>
        </div>

        {{--sidebar--}}

        <div class="grid grid-cols-10">
            <div class="bg-gray-300 col-span-2  rounded-lg py-5">
                @foreach($collection[0] as $surcategorie )
                    <h1 class="text-center text-2xl text-purple-800 py-3">  {{ $surcategorie->getName()}}</h1>
                    @foreach($collection[1] as $categorie)
                        <a href="{{route('show-surcategories-of-last-vente',[
                        'venteId' => $lastVente->getId(),
                        'surcategorieId'=>$surcategorie->getId(),
                        'categorieId' =>$categorie->getId()
                        ])}}">
                        <p class="text-center">{{$categorie->getName()}}</p></a>
                    @endforeach
                @endforeach
            </div>

            {{--        timbres--}}
            <div class="bg-gray-300 col-span-6 col-start-4 rounded-lg py-5">
                <h1 class="text-purple-700 text-2xl"></h1>
                <table class="mx-auto">
                    <tr>
                        <th class="p-3">Photo</th>
                        <th class="p-3">Titre</th>
                        <th class="p-3">Numero</th>
                        <th class="p-3">Description</th>
                        <th class="p-3">Côte</th>
                        <th class="p-3">Prix de départ</th>
                        <th class="p-3">Prix Atteint</th>
                    </tr>
                    @foreach($lots as $lot)
                        <tr>
                            <td class="p-3 text-center"><img src="{{asset('storage/timbres/'.$lot->photo)}}" alt="" style="width: 5rem"></td>
                            <td class="p-3 text-center">{{$lot->titre}}</td>
                            <td class="p-3 text-center">{{$lot->nolot}}</td>
                            <td class="p-3 text-center">{{$lot->description}}</td>
                            <td class="p-3 text-center">{{$lot->cote}}€</td>
                            <td class="p-3 text-center">{{$lot->depart}}€</td>
                            <td class="p-3 text-center">{{$lot->atteint}}€</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>

@endsection
