<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Producto;



class editProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = Producto::create([
            'Codigo_Producto' => intval($request->ID),
            'Nombre_Producto' => $request->Nombre,
            'Imagen_Prod' => $request->Imagen,
            'Descripcion_Producto' => $request->Descripcion,
            'Minimo' => intval($request->StockMinimo),
            'Maximo' => intval($request->StockMaximo),
            'Existencia' => intval($request->Existencia),
            'Valor_Unitario' => floatval($request->PrecioUnitario),            
            'Categoria_Producto_idCategoria_Producto' => intval($request->Categoria),
            'Tipo_Producto_idTipo_Producto' => intval($request->Tipo),            
            'Presentacion_Producto_idPresentacion_Producto' => intval($request->Presentacion),           
            'Marca' => $request->Marca,
            'Pais_Produccion' => $request->PaisOrigen,            
            'Cantidad' => $request->Cantidad,
            'Publico' => $request->Publico,
            'VentaLibre' => intval($request->VentaLibre),
            'Unidades_Paquete' => intval($request->UnidadesDePaquete),
            'Alto_Item' => $request->Alto,
            'Ancho_Item' => $request->Ancho,
            'Profundidad_Item' => $request->Profundidad,
            'Calificacion' => intval($request->Calificacion),
            'Contador' => intval($request->Contador),
        ]);
        
        return response()->json(['mensaje' => 'ok', 'success' => true]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
