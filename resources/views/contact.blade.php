@extends('app')
@section('content')
    <main class="mt-36">
        <div class="w-3/5 mx-auto mt-24">
            <h1 class="text-center  text-4xl text-purple-400 py-3">{{__("Contactez-Nous")}}</h1>
            <hr class="w-12 mx-auto text-purple-400">
        </div>
        <form method="POST" action="{{route('post-contact')}}" enctype="multipart/form-data">
            @csrf
            <div class="w-3/5 mx-auto my-12">
                <div class="grid grid-cols-2 justify-items-center">
                    <div class="w-1/2 grid py-3">
                        <label for="prenom">Prénom</label>
                        <input id="prenom" type="text" name="prenom" class="border rounded shadow h-8">
                    </div>
                    <div class="w-1/2 grid py-3">
                        <label for="nom">Nom</label>
                        <input id="nom" type="text" name="nom" class="border rounded shadow h-8">
                    </div>
                    <div class="w-1/2 grid py-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="border rounded shadow h-8">
                    </div>
                    <div class="w-1/2 grid py-3">
                        <label for="telephone">Téléphone</label>
                        <input type="text" name="telephone" class="border rounded shadow h-8">
                    </div>
                    <div class="w-1/2 grid py-3">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" class="border rounded shadow h-8">
                    </div>
                    <div class="w-1/2 grid py-3">
                        <label for="code_postal">Code Postal</label>
                        <input type="text" name="code_postal" class="border rounded shadow h-8">
                    </div>
                    <div class="w-1/2 grid py-3">
                        <label for="ville">Ville</label>
                        <input type="text" name="ville" class="border rounded shadow h-8">
                    </div>
                    <div class="w-1/2 grid py-3">
                        <label for="pays">Pays</label>
                        <input type="text" name="pays" class="border rounded shadow h-8">
                    </div>
                    <div class="grid col-span-2 py-3">
                        <label for="message">Veuillez indiquer votre demande</label>
                        <textarea name="message" rows="6" cols="92" class="border rounded shadow"></textarea>
                    </div>
                    <button  class="text-white col-span-2 w-1/4 mx-auto p-3 rounded-md bg-pink-800 my-10 hover:bg-pink-700 focus:outline-none focus:shadow-outline" type="submit">Envoyer</button>
                </div>
            </div>
        </form>

        <div class="w-3/5 mx-auto my-12">
            <h1 class="text-center  text-4xl text-purple-400 py-3">{{__("Adresse")}}</h1>
            <hr class="w-12 mx-auto text-purple-400">
        </div>
        <div class="w-3/5 mx-auto grid grid-cols-2 items-center ">
            <p class="col-span-2 text-center text-xl text-gray-600">{{__('Notre magasin est ouvert du lundi au vendredi de 9h-12h et de 14h-18h30')}}</p>
            <div>
                <img src="{{asset('img/footer_img.png')}}" class="mt-8" alt="">
            </div>
            <div class="">
                <p class="text-center text-2xl">{{__('Se rendre à notre boutique')}}</p>
                <hr class="w-12 mx-auto mt-2 text-purple-400">
                <p class="text-center mt-8">{{__("ROUMET")}}</p>
                <p class="text-center"> {{__("17 RUE DROUOT")}}</p>
                <p class="text-center"> {{__("75009 PARIS")}}</p>
                <p class="mx-auto mt-12 w-1/2 text-center">{{__("Vous pouvez nous contacter par E-mail : roumet@roumet.com ")}}</p>
                <p class="text-center">{{__("Par téléphone : +33(0)1 47 70 00 56")}}</p>
            </div>

            <div class="mt-20 col-span-2 w-full" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.1822995429397!2d2.3382992158539144!3d48.87380120757524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3ed5003391%3A0x3fda8301e97e82f!2s17%20Rue%20Drouot%2C%2075009%20Paris!5e0!3m2!1sfr!2sfr!4v1633960422264!5m2!1sfr!2sfr"
                      class="w-full h-64" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

    </main>
@endsection
