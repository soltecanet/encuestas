<?php

namespace App\Http\Livewire\Proveedores;

use Livewire\Component;
use App\Models\Supplier;
use App\Models\Region;
use App\Models\Commune;
use App\Http\Requests\SaveSupplierRequest;

class CreateSupplider extends Component
{
                     
    public Supplier $supplier;
    public $regiones;
    public $comunas;

    public function mount() {
        $this->supplier = new Supplier;
        $this->regiones = Region::pluck('name', 'id');
        $this->comunas = [];
    }

    protected function rules() {
        $request = new SaveSupplierRequest();
        return $request->rules($this->supplier);
    }
   
// Mensajes por defecto o personalizados
    protected function messages() {
        $request = new SaveSupplierRequest();
        return $request->messages();
    }


    public function getComunas($id) {
        $this->comunas = Commune::where('region_id', '=', $id)
                                ->pluck('name', 'id');
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
        return view('livewire.proveedores.create-supplider', [
            'regiones' => $this->regiones,
            'comunas' => $this->comunas
        ]);
    }
}
