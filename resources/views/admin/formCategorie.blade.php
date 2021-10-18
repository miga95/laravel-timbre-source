@extends('admin.dashboard')
@section('form')
    <div class="w-4/5 rounded bg-gray-100 grid grid-cols-2">
        <div>
            <h1 class="p-8 text-center text-4xl text-purple-400">Créer Catégorie</h1>
            <form method="POST" action="postCategorie">
                @csrf
                <div class="w-1/2 mx-auto grid grid-cols-2 justify-items-left">
                    <label class="font-semibold my-2" for="surcategorie">Surcategorie</label>
                    <select class="h-8 rounded border shadow my-2" id="surcategorie" name="surcategorie">
                        @foreach($surcategories as $surcategorie)
                            <option value="{{$surcategorie->getId()}}">{{$surcategorie->getName()}}</option>
                        @endforeach
                    </select>

                    <label class="font-semibold my-2" for="categorie">Nom de la Categorie</label>
                    <input class="h-8 rounded border shadow my-2" id="categorie" name="categorie" type="text" >

                    <input class="col-span-2 w-1/2 mx-auto p-3 rounded-md bg-green-600 my-10" type="submit">
                </div>
            </form>
        </div>

        <div class="">
            <h1 class="p-8 text-center text-4xl text-purple-400">Toutes les catégories</h1>
            <div class="w-2/3 mx-auto grid grid-cols-2 justify-items-left">
                <label class="font-semibold my-2" for="surcategorie">Surcatégorie</label>
                <select class="h-8 rounded border shadow my-2" id="surcategorie" name="surcategorie" >
                    @foreach($surcategories as $surcategorie)
                        <option value="">{{$surcategorie->getName()}}</option>
                    @endforeach
                </select>
                <p class="font-semibold my-2">Catégories</p>
                <div>
                    @foreach($categories as $categorie)
                        <p>{{$categorie->getName()}}</p>
                    @endforeach
                </div>



            </div>
        </div>
    </div>

@endsection
