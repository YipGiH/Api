@extends('layouts.app')

@section('titulo')
    Registrate en devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">  
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/img1.jpeg') }}" alt="Imagen del contenedor del registro">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
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
                    <label for="cedula" class="mb-2 block uppercase text-gray-500 font-bold">UserName</label>
                    <input type="text" id="cedula" name="cedula" placeholder="UserName" class="border p-3 w-full rounded-lg">
                    @error('cedula')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="telefono" class="mb-2 block uppercase text-gray-500 font-bold">E-mail</label>
                    <input type="text" id="telefono" name="telefono" placeholder="E-mail" class="border p-3 w-full rounded-lg">
                    @error('telefono')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="dirección" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="dirección" id="dirección" name="password" placeholder="Password" class="border p-3 w-full rounded-lg">
                    @error('dirección')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Crear cuenta" class="bg-purple-600 hover:bg-purple-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-xl">
            </form>
        </div>
    </div>
@endsection