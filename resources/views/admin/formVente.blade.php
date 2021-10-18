@extends('admin.dashboard')
@section('form')
    <div class="w-4/5 mx-auto bg-gray-100">
        <h1 class="p-8 text-center text-4xl text-purple-400">Créer Vente</h1>
        <form method="POST" action="postVente" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col items-center">
                <table class="w-3/5">
                    <tr class="py-3">
                        <th><label for="numeroVente">numero Vente</label></th>
                        <td><input id="numeroVente" name="numeroVente" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr class="py-3">
                        <th><label for="cloture">Cloture</label></th>
                        <td><input id="cloture" name="cloture" type="date" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr class="py-3">
                        <th><label for="info">info</label></th>
                        <td><input id="info" name="info" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                    <tr class="py-3">
                        <th><label for="catalogue">Catalogue de Vente</label></th>
                        <td><input id="catalogue" name="catalogue" type="file" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></td>
                    </tr>
                </table>

                <input  class="w-1/6 mx-auto p-3 rounded-md bg-green-600 my-10" type="submit">
            </div>
        </form>
    </div>

@endsection
