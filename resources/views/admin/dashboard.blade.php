@extends('app')
@section('content')
<div class="w-full bg-gray-300 py-6 rounded">
    <div class="w-3/5 mx-auto">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </div>

</div>


<div class="max-w-full my-16 mx-auto sm:px-6 lg:px-8 flex">
    <div class="p-6  bg-gray-300  flex flex-col w-1/5 rounded">
        <!--Vente-->
        <x-dropdown>
            <x-slot name="trigger" >
                <button class="my-5 ">Vente</button>
            </x-slot>
            <x-slot name="content" >
                <x-dropdown-link>
                    <a class="my-5 " href={{route('show-ventes')}}>Toutes les ventes</a>
                </x-dropdown-link>
                <x-dropdown-link>
                    <a class="my-5 " href={{route('formVente')}}>Créer Vente</a>
                </x-dropdown-link>

            </x-slot>
        </x-dropdown>

        <x-dropdown>
            <x-slot name="trigger" >
                <button class="my-5 ">Lot</button>
            </x-slot>
            <x-slot name="content" >
                <x-dropdown-link>
                    <a class="my-5 " href={{route('show-lots')}}>Tous les lots</a>
                </x-dropdown-link>
                <x-dropdown-link>
                    <a class="my-5" href={{route('formLot')}}>Lot</a>
                </x-dropdown-link>
                <x-dropdown-link>
                    <a class="my-5" href={{route('import-form')}}>Importer lots</a>
                </x-dropdown-link>

            </x-slot>
        </x-dropdown>

        <a class="my-5" href={{route('formSurcategorie')}}>Surcategorie</a>
        <a class="my-5" href={{route('formCategorie')}}>Categorie</a>

    </div>

    @yield('form')
</div>

@endsection
