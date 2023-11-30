<?php

namespace App\Http\Livewire\Proveedores;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Supplier;
use Carbon\Carbon;
use App\Exports\SupplierExport;
use Maatwebsite\Excel\Facades\Excel;



class SupplierTable extends DataTableComponent
{
    protected $model = Supplier::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            Column::make("Direction", "direction")
                ->sortable(),
            Column::make("Region", "region.name")
                ->sortable(),
            Column::make("Comuma", "commune.name")
                ->sortable(),
            Column::make("Creado", "created_at")
                ->sortable(),
            Column::make("Actualizado", "updated_at")
                ->format(
                    fn($value, $row, Column $column) =>  Carbon::createFromTimestamp(strtotime($row->updated_at))->format('d/m/Y')
                )
                ->sortable(),
            Column::make('Acciones','id')
                ->view('includes.actions-supplider'),
        ];
    }

    public function editar($id) {
        redirect()->route('supplier.edit', $id);
    }

    public function remove($id) {
        $reg = Supplier::find($id);
        $reg->delete();
        session()->flash('message','El Registro fue eliminado exitosamente.');
        redirect()->route('supplier.index');
    }

    public function export() 
    {
        return Excel::download(new SupplierExport, 'provedores.xlsx');
    }






}
