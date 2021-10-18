@extends('admin.dashboard')
@section('form')
    <div class="w-4/5 mx-auto bg-gray-100">
        <h1 class="p-8 text-center text-4xl text-purple-400">Toutes les ventes</h1>
        <div>
            <ul>
                @foreach($ventes as $vente)
                     <li><a href="">{{$vente->numeroVente}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
