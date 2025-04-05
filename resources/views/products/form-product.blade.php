{{-- Inicio cuerpo del formulario --}}


<div class="mt-20  md:mt-8 ">
    <input
        type="text"
        placeholder="Ingresar Nombre"
        wire:model="Product.name"
        class="placeholder-gray-300 block mb-2 w-full text-sm text-gray-900 bg-gray-50 rounded-sm border-2 border-blue-900 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
   @error('Product.name') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>

<div class="mt-20  md:mt-8 ">
    <input
        type="text"
        placeholder="Ingresar Código"
        wire:model="Product.codigo"
        class="placeholder-gray-300 block mb-2 w-full text-sm text-gray-900 bg-gray-50 rounded-sm border-2 border-blue-900 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
   @error('Product.codigo') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>

<div class="my-2">
    <input
        type="text"
        placeholder="Ingresar Direccion"
        wire:model="Product.ubicacion"
        class="placeholder-gray-300 block mb-2 w-full text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
   @error('Product.ubicacion') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>



</div>


{{-- Fin cuerpo del formulario --}}
