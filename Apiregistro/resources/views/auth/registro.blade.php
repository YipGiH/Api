@extends('layouts.app')

@section('titulo')
    Registrate
@endsection

@section('contenido')
    <div class="w-full justify-center items-center">  
        <div class="w-[600px] bg-white p-6 rounded-lg shadow-xl">
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="border p-3 w-full rounded-lg">
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="cedula" class="mb-2 block uppercase text-gray-500 font-bold">Cedula</label>
                    <input type="text" id="cedula" name="cedula" placeholder="Cedula" class="border p-3 w-full rounded-lg">
                    @error('cedula')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="telefono" class="mb-2 block uppercase text-gray-500 font-bold">Telefono</label>
                    <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="border p-3 w-full rounded-lg">
                    @error('telefono')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="direccion" class="mb-2 block uppercase text-gray-500 font-bold">Dirección</label>
                    <input type="direccion" id="direccion" name="direccion" placeholder="Dirección" class="border p-3 w-full rounded-lg">
                    @error('direccion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Crear cuenta" class="bg-purple-600 hover:bg-purple-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-xl">
            </form>
        </div>
    </div>
@endsection