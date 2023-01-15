@extends('tshirt.layout')
@section('content')
    <div class="relative bg-white">
        <p class="flex h-10 items-center justify-center bg-indigo-400 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">Camisas</p>
        <div class="items-center justify-end my-4">
          <a href="{{ url('/tshirt/create') }}" class="whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Nuevo</a>
        </div>
        <br>
        <div class="relative overflow-x-auto">
          <table class="w-full text-sm text-left">
            <thead class="text-xs text-white uppercase bg-indigo-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        N.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Marca del Producto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Producto
                    </th>
                </tr>
            </thead>
            <tbody class="bg-indigo-200">
              @foreach($tshirts as $item)
                <tr class="border-b">
                  <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                      {{ $loop->iteration }}
                  </th>
                  <td class="px-6 py-4">
                      {{ $item->marca }}
                  </td>
                  <td class="px-6 py-4">
                      {{ $item->color }}
                  </td>
                  <td class="px-6 py-4">
                      {{ $item->precio }}
                  </td>
                  <td class="px-6 py-4">
                      <img src="{{ asset($item->foto) }}" width="50" alt="camisa.{{$item->marca}}">
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endsection

