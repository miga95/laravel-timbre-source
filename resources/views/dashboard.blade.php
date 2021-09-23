@extends('app')
@section('content')
<div class="w-full bg-gray-300 py-6 rounded">
    <div class="w-3/5 mx-auto">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </div>
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-w border-b border-gray-200">
                Vous etes connecté
            </div>
        </div>
    </div>
</div>
@endsection
