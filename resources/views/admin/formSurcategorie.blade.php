@extends('admin.dashboard')
@section('form')
    <div class="w-3/5 mx-auto bg-gray-100">
        <h1 class="p-8 text-center text-4xl text-purple-400">Créer nouvelle Surcatégorie</h1>
        <form method="POST" action="postSurcategorie">
            @csrf
            <div class="flex flex-col items-center">
                <div>
                    <label for="surcategorie">nom </label>
                    <input id="surcategorie" name="surcategorie" type="text" >
                </div>
                <input  class="w-1/6 mx-auto p-3 rounded-md bg-green-600 my-10" type="submit">
            </div>

        </form>
    </div>

@endsection
