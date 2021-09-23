@extends('admin.dashboard')
@section('form')
    <div class="w-4/5 mx-auto bg-gray-100">
        <h1 class="p-8 text-center text-4xl text-purple-400">Créer Lot</h1>
        <form method="POST" action="{{route('postLot')}}" enctype="multipart/form-data" >
            @csrf
            <div class="flex flex-col items-center">
                <table>
                    <tr>
                        <th><label for="titre">Titre du lot</label></th>
                        <td><input id="titre" name="titre" type="text" required class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" ></td>
                    <tr>
                        <th><label for="qualite">Qualite</label></th>
                        <td><input id="qualite" name="qualite" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="description">Description</label></th>
                        <td><input id="description" name="description" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="nb">Nombre</label></th>
                        <td><input id="nb" name="nb" type="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr>
                        <th><label for="depart">Prix de départ</label></th>
                        <td><input id="depart" name="depart" type="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr>
                        <th><label for="cote">Côte</label></th>
                        <td><input id="cote" name="cote" type="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr>
                        <th><label for="vente">Numero de vente</label></th>
                        <td><input id="vente" name="vente" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr>
                        <th><label for="surcategorie">Surcategorie</label></th>
                        <td> <input id="surcategorie" name="surcategorie" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr>
                        <th><label for="categorie">Categorie</label></th>
                        <td> <input id="categorie" name="categorie" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr>
                        <th><label for="top">Prix maximum du lot</label></th>
                        <td><input id="top" name="top" type="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr>
                        <th><label for="start_bid">départ de l'enchère</label></th>
                        <td><input id="start_bid" name="start_bid" type="datetime-local" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr>
                        <th><label for="stop_bid">fin de l'enchère</label></th>
                        <td><input id="stop_bid" name="stop_bid" type="datetime-local" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr>
                        <th><label for="photo">Photo</label></th>
                        <td><input id="photo" name="photo" type="file" multiple accept=".png,.jpeg,.jpg" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>

                </table>

                <input  class="w-1/6 mx-auto p-3 rounded-md bg-green-600 my-10" type="submit">

            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>

    </div>

@endsection
