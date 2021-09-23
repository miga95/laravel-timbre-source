@extends('user.dashboard')
@section('form')
    <!--adresse-->
    @foreach($adresses as $adresse)

<div class="flex w-3/5 max-w-7xl mx-auto p-10 my-10 bg-gray-300 rounded">
    <div class="">
        <h1 class="text-center text-3xl text-purple-700 p-3 mb-5">Adresse</h1>
        <form method="POST" action="{{route('post-adresse')}}" class="flex flex-col" >
            @csrf
            <table class="mx-auto">
                <tr>
                    <th><label for="titre"></label>Titre de l'adresse</th>
                    <th><input type="text" name="titre" value="{{$adresse->titre}}"></th>
                </tr>
                <tr>
                    <th><label for="societe"></label>Société</th>
                    <th><input type="text" name="societe" value="{{$adresse->societe}}"></th>
                </tr>
                <tr>
                    <th><label for="adresse"></label>Adresse</th>
                    <th><input type="text" name="adresse" value="{{$adresse->adresse}}"></th>
                </tr>
                <tr>
                    <th><label for="code_postal"></label>Code Postal</th>
                    <th><input type="text" name="code_postal" value="{{$adresse->code_postal}}"></th>
                </tr>
                <tr>
                    <th><label for="ville"></label>Ville</th>
                    <th><input type="text" name="ville" value="{{$adresse->ville}}"</th>
                </tr>
                <tr>
                    <th><label for="pays"></label>Pays</th>
                    <th><input type="text" name="pays" value="{{$adresse->pays}}"></th>
                </tr>
                <tr>
                    <th><label for="informations_supplementaire"></label>Informations supplémentaire</th>
                    <th><input type="text" name="informations_supplementaire" value="{{$adresse->informations_supplementaire}}"></th>
                </tr>
                <tr>
                    <th><label for="telephone_portable"></label>Telephone portable</th>
                    <th><input type="text" name="telephone_portable" value="{{$adresse->telephone_portable}}"></th>
                </tr>
                <tr>
                    <th><label for="telephone_domicile"></label>Telephone domicile</th>
                    <th><input type="text" name="telephone_domicile" value="{{$adresse->telephone_domicile}}"></th>
                </tr>
            </table>
            <input class="mx-auto w-1/4 p-3 rounded-md bg-green-600 my-10" type="submit">
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
    <div>
        <h1 class="text-center text-3xl text-purple-700 p-3 mb-5">Mes Adresse</h1>
        @foreach($adresses as $adresse)
            <div class="">
                <table class="border border-black">
                    <tr class="border border-black">
                        <th>Titre de l'adresse</th>
                        <td>{{$adresse->titre}}</td>
                    </tr>
                    <tr class="border border-black">
                        <th>Société</th>
                        <td>{{$adresse->societe}}</td>
                    </tr>
                    <tr class="border border-black">
                        <th>Adresse</th>
                        <td>{{$adresse->adresse}}</td>
                    </tr>
                    <tr class="border border-black">
                        <th>Code Postal</th>
                        <td>{{$adresse->code_postal}}</td>
                    </tr>
                    <tr class="border border-black">
                        <th>Ville</th>
                        <td>{{$adresse->ville}}</td>
                    </tr>
                    <tr class="border border-black">
                        <th>Pays</th>
                        <td>{{$adresse->pays}}</td>
                    </tr>
                    <tr class="border border-black">
                        <th>Informations supplémentaire</th>
                        <td>{{$adresse->information_supplementaire}}</td>
                    </tr>
                    <tr class="border border-black">
                        <th>Téléphone portable</th>
                        <td>{{$adresse->telephone_portable}}</td>
                    </tr>
                    <tr class="border border-black">
                        <th>Téléphone domicile</th>
                        <td>{{$adresse->telephone_domicile}}</td>
                    </tr>
                </table>
            </div>
        @endforeach
    </div>
</div>


    @endforeach
@endsection
