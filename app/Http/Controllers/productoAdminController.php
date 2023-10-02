<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\TipoProducto;
use App\Models\PresentacionProducto;


class productoAdminController extends Controller
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
        $productos = Producto::where("Categoria_Producto_idCategoria_Producto", $request->categorie)->get();


        return response()->json(['productos' => $productos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id);
        $categoria = $producto->Categoria_Producto_idCategoria_Producto;
        $Tipo = $producto->Tipo_Producto_idTipo_Producto;
        $Presentacion = $producto->Presentacion_Producto_idPresentacion_Producto;
        $categoria = Categoria::where("ID", $categoria)->first();
        $Tipo = TipoProducto::where("idTipo_Producto", $Tipo)->first();
        $Presentacion = PresentacionProducto::where("idPresentacion_Producto", $Presentacion)->first();


        $data = [
            "Presentacion"=> $Presentacion,
        ];

        return response()->json([
            "Producto" => $producto,
            "Categoria"=> $categoria,
            "Tipo"=> $Tipo,
            "data" => $data
        ]);
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
        $producto = Producto::find($id);
        

        $data = [
            'Codigo_Producto' => ($request->ID),
            'Nombre_Producto' => $request->Nombre,
            'Imagen_Prod' => $request->Imagen,
            'Descripcion_Producto' => $request->Descripcion,
            'Minimo' => ($request->StockMinimo),
            'Maximo' => ($request->StockMaximo),
            'Existencia' => ($request->Existencia),
            'Valor_Unitario' => ($request->PrecioUnitario),            
            'Categoria_Producto_idCategoria_Producto' => ($request->Categoria),
            'Tipo_Producto_idTipo_Producto' => ($request->Tipo),            
            'Presentacion_Producto_idPresentacion_Producto' => ($request->Presentacion),           
            'Marca' => $request->Marca,
            'Pais_Produccion' => $request->PaisOrigen,            
            'Cantidad' => $request->Cantidad,
            'Publico' => $request->Publico,
            'VentaLibre' => ($request->VentaLibre),
            'Unidades_Paquete' => ($request->UnidadesDePaquete),
            'Alto_Item' => $request->Alto,
            'Ancho_Item' => $request->Ancho,
            'Profundidad_Item' => $request->Profundidad,
            'Calificacion' => ($request->Calificacion),
            'Contador' => ($request->Contador),
        ];

        // Filtrar $request->all() para eliminar campos vacíos
        $data = array_filter($data, function($value) {
            return !is_null($value) && $value !== '';
        });
    
        $producto->update($data);
        return response()->json(['success'=> 'Edit exitoso', 'producto' => $data]);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto->delete();
    
        return response()->json(['message' => 'Producto eliminado con éxito']);
    }
}
