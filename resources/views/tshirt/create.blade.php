@extends('tshirt.layout')
@section('content')
    <div class="relative bg-white">
        <p class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">Nueva Camisa</p>
        <div class="mx-auto w-full">
            <form  action="{{ url('tshirt') }}" method="post" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @include('tshirt._form')
            </form>
        </div>
    </div>
@endsection