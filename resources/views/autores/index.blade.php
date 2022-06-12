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

                    @if (session()->has('error'))
                        <div class="bg-red-100 p-4 mb-4 text-sm text-red-700" role="alert">
                            <span class="font-semibold">{{ session('error') }}</span>
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="bg-green-100 p-4 mb-4 text-sm text-green-700" role="alert">
                            <span class="font-semibold">{{ session('success') }}</span>
                        </div>
                    @endif

                    Vamos aprobar

                    <table class="default">

                        <tr>

                            <td>Id</td>

                            <td>Nombre</td>

                            <td>mostrar</td>

                            <td>Editar</td>

                            <td>Borrar</td>




                        </tr>
                        @foreach ($autores as $autor)
                            <tr>

                                <td>{{ $autor->id }}</td>

                                <td>{{ $autor->nombre }}</td>

                                



                                <td>
                                    <a href="{{ route('autores.show', $autor) }}">Mostrar</a>
                                </td>


                                <td>
                                    <a href="{{ route('autores.edit', $autor) }}">Edit</a>
                                </td>
                                <td>

                                    <form action="{{ route('autores.destroy', $autor) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('¿Seguro que desea borrar la autor?')"
                                            class="px-4 py-1 text-sm text-white bg-red-400 rounded"
                                            type="submit">Borrar</button>
                                    </form>
                                </td>



                            </tr>
                        @endforeach


                    </table>
                    <br>
                    <a href="{{ route('autores.create') }}">Crear autor</a>







                </div>
            </div>
        </div>
    </div>
</x-app-layout>
