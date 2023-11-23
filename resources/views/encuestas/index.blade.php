<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de las personas encuestadas') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="py-2 px-4 block w-full">
                    <a href="{{ route('persona.create') }}">
                    <button 
                    
                        class="align-middle self-center  bg-blue-600 hover:bg-blue-800 text-white px-3 py-2 rounded-md tracking-tight">
                        Crear Entrevistado
                    </button>
                    </a>
                </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Direccion
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Creado
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actualizado
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Acciones</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($lista as $element)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              {{  $element->name }}
                            </th>
                            <td class="px-6 py-4">
                            {{  $element->email }}
                            </td>
                            <td class="px-6 py-4">
                            {{  $element->direction }}
                            </td>
                            <td class="px-6 py-4">
                            {{  $element->created_at }}
                            </td>
                            <td class="px-6 py-4">
                            {{  $element->updated_at }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
            </div>

    </div>
</x-app-layout>
