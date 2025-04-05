<?php

namespace App\Http\Livewire\Productos;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Product;
use Carbon\Carbon;

class ProductsTable extends DataTableComponent
{
    protected $model = Product::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre del Producto", "name")
                ->sortable(),
            Column::make("Código del producto", "codigo")
                ->sortable(),
            Column::make("Ubicación en almacen", "ubicacion")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->format(
                    fn($value, $row, Column $column) =>  Carbon::createFromTimestamp(strtotime($row->updated_at))->format('d/m/Y')
                )
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Acciones','id')
                ->view('products.actions-products'),
        ];
    }
}
