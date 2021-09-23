@extends('admin.dashboard')
@section('form')
    <div class="w-4/5 mx-auto bg-gray-100">
        <h1 class="p-8 text-center text-4xl text-purple-400">Créer Vente</h1>
        <form method="POST" action="postVente">
            @csrf
            <div class="flex flex-col items-center">
                <table>
                    <tr>
                        <td><label for="numeroVente">numero Vente</label></td>
                        <td><input id="numeroVente" name="numeroVente" type="text" ></td>
                    </tr>
                    <tr>
                        <td><label for="cloture">Cloture</label></td>
                        <td><input id="cloture" name="cloture" type="date" ></td>
                    </tr>
                    <tr>
                        <td><label for="info">info</label></td>
                        <td><input id="info" name="info" type="text" ></td>
                    </tr>
                </table>

                <input  class="w-1/6 mx-auto p-3 rounded-md bg-green-600 my-10" type="submit">
            </div>
        </form>
    </div>

@endsection
