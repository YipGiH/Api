@extends('layouts.app')

@section('titulo')
    Vienvenido
@endsection
<a href="{{ route('register') }}" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-xl">RegistraCe</a>
<a href="{{ route('listar') }}" class="bg-blue-600 hover:bg-blue-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-xl">Listar</a>

