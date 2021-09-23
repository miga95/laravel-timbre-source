@extends('admin.dashboard')
@section('form')
    <div class="w-4/5 mx-auto bg-gray-100">
        <h1 class="p-8 text-center text-4xl text-purple-400">Importer des lots</h1>
        <form method="POST" action="{{route('import')}}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col items-center">
                <div>
{{--                    <label for="csvLot">Importer Lots</label>--}}
                    <input id="csvLot" name="csvLot" type="file" >
                </div>
                <input  class="w-1/6 mx-auto p-3 rounded-md bg-green-600 my-10" type="submit">
            </div>

        </form>
    </div>

@endsection
