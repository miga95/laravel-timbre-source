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
        <div class="p-6 my-10 bg-gray-300  border-gray-200 flex flex-col w-1/5 rounded">
            <x-dropdown>
                <x-slot name="trigger" >
                    <button class="my-5 ">Enchères</button>
                </x-slot>
                <x-slot name="content" >
                    <x-dropdown-link>
                        <a class="my-5 " href={{route('formLot')}}>Tous les lots</a>
                    </x-dropdown-link>
                    <x-dropdown-link>
                        <a class="my-5" href={{route('formLot')}}>Lot</a>
                    </x-dropdown-link>

                </x-slot>
            </x-dropdown>
            <a class="my-5" href={{route('show-profile')}}>Profil</a>
            <a class="my-5" href={{route('show-adresse')}}>Adresse</a>
            <a class="my-5" href={{route('formCategorie')}}>Mes achats</a>

        </div>

        @yield('form')
    </div>

@endsection
