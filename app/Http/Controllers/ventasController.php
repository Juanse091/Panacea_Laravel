<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class ventasController extends Controller
{
    public function venta(Request $request){
        $ventas = $request->all();
        foreach($ventas as $producto){
            $id = $producto['id'];  
            $quantity = $producto['quantity'];
            $prod = Producto::find($id);
            $existencia = $prod->Existencia;

            $update = $existencia - $quantity;

            $prod->update(['Existencia' => $update]);
        };
    }
}
