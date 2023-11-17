@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-gray-500">Lista de usuarios</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="border p-2">ID</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Cédula</th>
            <th class="border p-2">Teléfono</th>
            <th class="border p-2">Dirección</th>
        </tr>
    </thead>
    <tbody>
        {{$registro}}
        {{-- @foreach ($registros as $regis)
            <tr class="hover:bg-gray-200 cursor-pointer">
                <td class="border pl-2 text-center">{{ $regis->id }}</td>
                <td class="border p-2 text-center">{{ $regis->nombre }}</td>
                <td class="border p-2 text-center">{{ $regis->cedula }}</td>
                <td class="border p-2 text-center">{{ $regis->telefono }}</td>
                <td class="border p-2 text-center">{{ $regis->direccion }}</td>
            </tr>
        @endforeach --}}
    </tbody>
</table>
<button type="submit">Imprimir Datos</button>
<a href="{{ route('registro') }}"><button>Nuevo Registro</button></a>
@endsection
