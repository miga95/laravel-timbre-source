@extends('user.dashboard')
@section('form')
    <div class="mx-auto p-10 my-10 bg-gray-300 rounded">
        <h1 class="text-center text-3xl text-purple-700 p-3 mb-5">Profile</h1>

        <form method="POST" action="{{route('post-profile')}}"  class="flex flex-col">
            @csrf
            <table class="mx-auto">
                <tr>
                    <td>Civilité</td>
                    <td class="flex">
                        <div class="p-2">
                            <label for="homme">Homme</label>
                            <input id="homme" name="civilite" type="radio" value="homme">
                        </div>
                        <div class="p-2">
                            <label for="femme">Femme</label>
                            <input id="femme" name="civilite" type="radio" value="femme" >
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="nom">Nom</label></td>
                    <td><input id="nom" name="nom" type="text"  value="{{$user->nom}}" ></td>
                </tr>
                <tr>
                    <td><label for="prenom">Prenom</label></td>
                    <td><input id="prenom" name="prenom" type="text" value="{{$user->prenom}}"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input id="email" name="email" type="text" value="{{$user->email}}"></td>
                </tr>
                <tr>
                    <td><label for="naissance">Date de naissance</label></td>
                    <td><input id="date_naissance" name="date_naissance" type="date" value="{{$user->date_naissance}}"></td>
                </tr>
            </table>

            <input class="mx-auto w-1/4 p-3 rounded-md bg-green-600 my-10" type="submit">
        </form>
    </div>
@endsection
