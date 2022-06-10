{{ $monografias }}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Monografias') }}
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

                            <td>año</td>

                           <td>mostrar</td>

                            <td>Editar</td>

                            <td>Borrar</td>




                        </tr>
                        @foreach ($monografias as $monografia)
                            <tr>

                                <td>{{ $monografia->id }}</td>

                                <td>{{ $monografia->titulo }}</td>

                                <td>{{ $monografia->anyo }}</td>

                                <td>
                                    <a href="{{route ('monografias.show',$monografia)}}">Mostrar</a>
                                </td>





                            </tr>
                        @endforeach


                    </table>
                    <br>
                    <a href="{{ route('monografias.create') }}">Crear monografia</a>







                </div>
            </div>
        </div>
    </div>
</x-app-layout>
