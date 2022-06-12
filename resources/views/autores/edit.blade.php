<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Autores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    Vamos aprobar

                    <form action="{{ route('autores.update', $autor, false) }}" method="post">
                        @csrf
                        @method('PUT')

                        <label for="nombre">nombre</label>
                        <input type="text" name="nombre" placeholder="Introduzca nombre"
                        value="{{ old('nombre', $autor->nombre) }}">
                        @error('nombre')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                        <br>


                        <br>
                        <button type="submit">Enviar</button>
                        @error('nombre')
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
