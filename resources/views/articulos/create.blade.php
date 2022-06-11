
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articulos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    articulos
                    articulo

                    Vamos aprobar

                    <form action="{{ route('articulos.store', [], false) }}" method="post">
                        @csrf
                        @method('POST')

                        <label for="titulo">Titulo</label>
                        <input type="text" name="titulo" placeholder="Introduzca titulo"
                        value="{{ old('titulo') }}">
                        @error('titulo')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                        <br>
                        <label for="anyo">Año</label>
                        <input type="year" name="anyo" placeholder="Introduzca el año "
                        value="{{ old('anyo') }}">
                        @error('anyo')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                    <br>
                        <label for="num_paginas">Numero de Paginas</label>
                        <input type="number" name="num_paginas" placeholder="Introduzca el numero de paginas "
                        value="{{ old('num_paginas') }}">
                        @error('num_paginas')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                        <br>
                        <button type="submit">Enviar</button>
                        @error('titulo')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
