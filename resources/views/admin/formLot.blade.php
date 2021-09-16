@extends('admin.dashboard')
@section('form')
    <div class="w-4/5 mx-auto bg-gray-100">
        <h1 class="p-8 text-center text-4xl text-purple-400">Créer Lot</h1>
        <form method="POST" action="postLot">
            @csrf
            <div class="flex flex-col items-center">
                <div class="p-3">
                    <label for="titre">Titre du lot</label>
                    <input id="titre" name="titre" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                </div>
                <div class="p-3">
                    <label for="qualite">Qualite</label>
                    <input id="qualite" name="qualite" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                </div>
                <div class="p-3">
                    <label for="description">Description</label>
                    <input id="description" name="description" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="p-3">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" name="nombre" type="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="p-3">
                    <label for="depart">Prix de départ</label>
                    <input id="depart" name="depart" type="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="p-3">
                    <label for="cote">Côte</label>
                    <input id="cote" name="cote" type="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="p-3">
                    <label for="vente">Numero de vente</label>
                    <input id="vente" name="vente" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="p-3">
                    <label for="surcategorie">Surcategorie</label>
                    <input id="surcategorie" name="surcategorie" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="p-3">
                    <label for="categorie">Categorie</label>
                    <input id="categorie" name="categorie" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <input  class="w-1/6 mx-auto p-3 rounded-md bg-green-600 my-10" type="submit">
            </div>
        </form>
    </div>

@endsection
