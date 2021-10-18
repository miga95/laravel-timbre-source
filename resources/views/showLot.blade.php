@extends('app')
@section('content')
    <main class = "mt-36">
        <div class=" w-3/5 mx-auto my-12 flex">
            <img src="{{asset('storage/timbres/'.$lot->photo) }}" width="40%" alt="">
            <div class="my-12 mx-auto flex flex-col items-center ">
                <h1 class="text-4xl text-purple-400 py-3">{{$lot->titre}}</h1>
                <hr class="w-1/4 mx-auto text-purple-400">
                <p class="mt-12 text-xl text-justify">{{$lot->vente->getNumeroVente()}}ème Vente</p>
                <p class="text-xl text-justify">{{$lot->description}}</p>
                <p class="text-xl text-justify">Etat : {{$lot->qualite}}</p>
                <p class="text-xl text-justify">Prix de départ : {{$lot->depart}}€</p>
                <p class="text-xl text-justify">Côte : {{$lot->cote}}€</p>

                <a href="https://roumet.com" class="block w-full bg-pink-800 text-xl text-white text-center mx-auto p-2 rounded-lg my-12">Encherir</a>
            </div>
        </div>

{{--form contact--}}
        <div class="w-3/5 mt-16 mx-auto">
            <h1 class="text-center text-4xl text-purple-400 py-3">Contactez-nous pour plus d'informations</h1>
            <hr class="w-28 mx-auto text-purple-400 ">
            <form method="POST" action="{{route('post-contact')}}" enctype="multipart/form-data">
                @csrf
                <div class="w-2/3 mx-auto my-12">
                    <div class="grid grid-cols-2 justify-items-center">
                        <div class="w-1/2 grid py-3">
                            <label for="prenom">Prénom</label>
                            <input id="prenom" type="text" name="prenom" class="border">
                        </div>
                        <div class="w-1/2 grid py-3">
                            <label for="nom">Nom</label>
                            <input id="nom" type="text" name="nom" class="border">
                        </div>
                        <div class="w-1/2 grid py-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="border">
                        </div>
                        <div class="w-1/2 grid py-3">
                            <label for="telephone">Téléphone</label>
                            <input type="text" name="telephone" class="border">
                        </div>
                        <div class="grid col-span-2 py-3">
                            <label for="message">Veuillez indiquer votre demande</label>
                            <textarea name="message" rows="6" cols="70" class="border"></textarea>
                        </div>
                        <input  class="col-span-2 w-1/4 mx-auto p-3 rounded-md bg-pink-800 my-10 text-white" type="submit">
                    </div>
                </div>
            </form>

        </div>
    </main>
@endsection
