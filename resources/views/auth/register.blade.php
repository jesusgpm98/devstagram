@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-1/2">
            <p>imagen aqui</p>
        </div>

        <div class="md:w-1/2">
            <form>
                <div class="mb-5">
                    <label for="name" id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" id="name" name="name" placeholder="tu nombre" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        username
                    </label>
                    <input type="text" id="username" name="name" placeholder="tu nombre" class="border p-3 w-full rounded-lg">
                </div>
            </form>
        </div>
    </div>
@endsection
