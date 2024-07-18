<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\ingrediente;
use App\Models\Producto;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function inventario ()
    {
        return view('inventario');
    }

    public function compras ()
    {
        return view('compras');
    }

    public function ventas ()
    {
        return view('ventas');
    }

    public function costos ()
    {
        return view('costos');
    }
    
    public function productos()
    {
        return view('productos');
    }

    public function mostrarProductos()
    {
        $productos = Producto::get();
        return view('productos',['productos' => $productos]
    );
    }

    public function ingresarIngrediente(Request $request)
    {
        $ingrediente = new Ingrediente;

        $ingrediente->nombre = $request->nombre;
        $ingrediente->cantidad = $request->cantidad;
        $ingrediente->valor_total = $request->valor_total;
        $ingrediente->valor_unitario = $ingrediente->valor_total / $ingrediente->cantidad;
        $ingrediente->save();

        return back();
    }

    public function mostrarIngredientes ()
    {
        $ingredientes = Ingrediente::get();

        return view('inventario', ['ingredientes' => $ingredientes]);
    }

    public function mostrarIngredientesCostos ()
    {
        $ingredientes = Ingrediente::get();

        return view('costos', ['ingredientes' => $ingredientes]);
    }

}
