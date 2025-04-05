<?php

namespace App\Http\Livewire\Productos;

use Livewire\Component;
use App\Models\Product;
class CreateProduct extends Component
{


    public Product $product;



    protected function rules() {
        $request = new SaveSupplierRequest();
        return $request->rules($this->supplier);
    }

// Mensajes por defecto o personalizados
    protected function messages() {
        $request = new SaveSupplierRequest();
        return $request->messages();
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save() {

        $this->validate();
        $this->supplier->save();
        session()->flash('message','Nuevo Proveedor Creado.');
        redirect()->route('supplier.index');
    }





    public function render()
    {
        return view('livewire.productos.create-product');
    }
}
