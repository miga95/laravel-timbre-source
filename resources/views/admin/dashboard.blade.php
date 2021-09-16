@extends('app')
@section('content')
<div class="w-full bg-gray-300 py-6 rounded">
    <div class="w-3/5 mx-auto">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </div>

</div>


<div class="max-w-7xl my-12 mx-auto sm:px-6 lg:px-8 flex">
    <div class="p-6 my-10 bg-gray-300  border-gray-200 flex flex-col w-1/5">
        <a class="my-5 " href={{route('formVente')}}>Vente</a>
        <a class="my-5" href={{route('formSurcategorie')}}>Surcategorie</a>
        <a class="my-5" href={{route('formCategorie')}}>Categorie</a>
        <a class="my-5" href={{route('formLot')}}>Lot</a>
    </div>

    @yield('form')
</div>

@endsection
