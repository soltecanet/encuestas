<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules(Product $produc)
    {
        return [
            'produc.name' => 'required',
            'produc.codigo' => 'required',
            'produc.ubicacion' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'produc.name.required' => 'El Nombre del PrProducto  es requerido.',
            'produc.codigo.required' => 'El código del producto es requerido',
            'produc.ubicacion.required' => 'Se requiere la ubicacion del producto',

        ];
    }

}
