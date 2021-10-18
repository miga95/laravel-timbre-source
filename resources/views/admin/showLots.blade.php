@extends('admin.dashboard')
@section('form')
    <div class="w-4/5 mx-auto bg-gray-100">
        <h1 class="p-8 text-center text-4xl text-purple-400">Tous les Lots</h1>
        <div>
            <ul>
            @foreach($lots as $lot)
                    <li>{{$lot}}</li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection
