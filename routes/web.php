<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Encuestas\SurveyController;
use App\Http\Livewire\Proveedores\CreateSupplider;
use App\Http\Livewire\Proveedores\EditSupplider;
use App\Http\Livewire\Proveedores\ListSupplider;
use App\Http\Livewire\Productos\CreateProduct;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/lista_encuestados', [SurveyController::class, 'index'])->name('encuestas.index');
    Route::get('/crear_persona', [SurveyController::class, 'newPerson'])->name('persona.create');


    Route::get('/proveedores', ListSupplider::class)->name('supplier.index');
    Route::get('/crear_proveerdor', CreateSupplider::class)->name('supplier.create');
    Route::get('/editar_proveerdor/{id}', EditSupplider::class)->name('supplier.edit');

    // Rutas del Producto
    Route::get('/productos', function () {  return view('products.lista-products');  })->name('productos.index');
    Route::get('/crear_producto', CreateProduct::class)->name('productos.create');


});





