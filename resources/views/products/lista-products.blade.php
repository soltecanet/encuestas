<x-app-layout>
    <div class=" px-3 sm:px-6 py-2 overflow-x-auto" >
        <div class="max-w-8xl mx-auto sm:px-2 lg:px-4">
            <div class="bg-white  px-3 rounded-md ">
            <x-messages.message-save-form/>

            <div class="flex">
                    <div class="py-2 px-4 block w-full">
                        <a href="{{ route('productos.create')}}">
                            <button
                                class="align-middle self-center  bg-blue-600 hover:bg-blue-800 text-white px-3 py-2 rounded-md tracking-tight">
                                Crear Producto
                            </button>
                        </a>
                    </div>
            </div>
            <div class="bg-gray-50 items-center justify-center font-sans overflow-hidden">
                <div class="bg-white shadow-md rounded">
                     @livewire('productos.products-table')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
