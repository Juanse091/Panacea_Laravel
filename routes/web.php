<?php


use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductoDestacadoGeneralController;
use App\Models\ProductoDestacadoGeneral;
use App\Models\Producto;


//? VISTA HOMEPAGE

Route::get('/', function () {
    return Inertia::render('HomePage', [
    ]);
})->name('Home');


//? VISTA MEDICAMENTOS

Route::get('/medicamento/{id}', function ($id, Producto $producto) {
    // Obtén el producto por su ID
    $producto = $producto->findOrFail($id);

    // Accede a la relación "categoriaProducto" para obtener la categoría
    $categoria = $producto->categoria_producto;
    $tipo = $producto->tipo_producto;

    // Accede al atributo "Nombre" de la tabla "CategoriaProducto"
    $nombreCategoria = $categoria->Nombre_Categoria;
    $nombreTipo = $tipo->Nombre_tipo_prod;

    return Inertia::render('MedicamentoPage', [
        'id' => $id,
        'producto' => $producto,
        'nombreCategoria' => $nombreCategoria,
        'nombreTipo' => $nombreTipo,
    ]);
})->name('medicamento');


//? VISTA CARRITO DE COMPRA

Route::get('/carrito', function (){
    return Inertia::render('CarritoPage', [

    ]);
})->name('Carrito de compra');


//? VISTA PREGUNTAS FRECUENTES

Route::get('/preguntas', function (){
    return Inertia::render('PreguntasFrecuentesPage', [

    ]);
})->name('Preguntas frecuentes');


//? VISTA QUIENES SOMOS

Route::get('/quienes_somos', function (){
    return Inertia::render('Quienes_somosPage', [

    ]);
})->name('Quienes somos');


//! Controladores

Route::get('/productosDest', [ProductoDestacadoGeneralController::class,'index']);
