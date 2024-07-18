<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(Controller::class)->group(function (){
    Route::get('/', 'mostrarIngredientes')->name('inventario');
    Route::get('compras', 'compras')->name('compras');
    Route::get('ventas', 'ventas')->name('ventas');
    Route::get('productos', 'mostrarProductos')->name('productos');
    Route::get('costos', 'mostrarIngredientesCostos')->name('ingredientesCostos');
    Route::post('ingresarIngrediente', 'ingresarIngrediente')->name('ingresarIngrediente');
});
