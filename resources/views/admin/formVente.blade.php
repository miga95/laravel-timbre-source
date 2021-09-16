@extends('admin.dashboard')
@section('form')
    <div class="w-4/5 mx-auto bg-gray-100">
        <h1 class="p-8 text-center text-4xl text-purple-400">Créer Vente</h1>
        <form method="POST" action="postVente">
            @csrf
            <div class="flex flex-col items-center">
                <div>
                    <label for="numeroVente">numero Vente</label>
                    <input id="numeroVente" name="numeroVente" type="text" >
                </div>
                <div>
                    <label for="cloture">Cloture</label>
                    <input id="cloture" name="cloture" type="date" >

                </div>
                <div>
                    <label for="info">info</label>
                    <input id="info" name="info" type="text" >
                </div>

                <input  class="w-1/6 mx-auto p-3 rounded-md bg-green-600 my-10" type="submit">
            </div>

        </form>
    </div>

@endsection
