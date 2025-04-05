<div class="flex justify-center px-3 sm:px-6 py-2" >
    <div class="shadow rounded-lg overflow-hidden">
        <div class="bg-white py-2 px-3 rounded-md ">
            <form  wire:submit.prevent="save">
             <div class="px-2">
                   <div class="my-2" >
                    <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                    {{ __('Producto Nuevo') }}
                    </span>
                   </div>


                  @include('products.form-product')
                  @include('products.btns-form-product')


             </div>

          </form>
       </div>
    </div>


 </div>

