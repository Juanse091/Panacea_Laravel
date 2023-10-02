<?php


use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\Producto;
use App\Models\CategoriaProducto;

use App\Http\Controllers\ProductoDestacadoGeneralController;
use App\Http\Controllers\UsertController;
use App\Http\Controllers\editProductsController;
use App\Http\Controllers\productoAdminController;

//? VISTA HOMEPAGE

Route::get('/', function () {
    return Inertia::render('HomePage', [
        'userAuth' => !Auth::check(),
        'canRegister' => Route::has('register'),
    ]);
})->name('homepage');



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


Route::get(('/categoria/{id}'), function ($id, Producto $producto, CategoriaProducto $categoria) {
    $producto = Producto::where('Categoria_Producto_idCategoria_Producto', $id)->get();
    $categoria = CategoriaProducto::where('idCategoria_Producto', $id)->get();
    return Inertia::render('CategoriePage', [
        'id'=> $id,
        'productos'=>$producto,
        'categorias'=> $categoria
    ]);
});


//? VISTA CARRITO DE COMPRA

Route::get('/carrito', function (){
    return Inertia::render('CarritoPage', [

    ]);
})->name('Carrito de compra');


//? VISTA PREGUNTAS FRECUENTES

Route::get('/preguntas', function (){
    return Inertia::render('PreguntasFrecuentesPage', [

    ]);
})->name('Preguntas_frecuentes');


//? VISTA QUIENES SOMOS

Route::get('/quienes_somos', function (){
    return Inertia::render('Quienes_somosPage', [

    ]);
})->name('Quienes somos');


//! ADMIN


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return Inertia::render('AdminHubPage');
    })->name('adminHUB');

    Route::group(['prefix' => 'Productos'], function(){
        Route::get('/', function () {
            return Inertia::render('ProductoAdminPage', [
                'ruta_productos' => route('productoAdmin'),
            ]);
        })->name('adminHUB.Productos');

        Route::get('/editarProductos/{accion?}', function () {
            return Inertia::render('EditProductoPage');
        })->name('adminHUB.editarProductos');
    });
});

//? PARTICULAR

Route::get('/particulares', function (){
    return Inertia::render('ParticularHubPage', [

    ]);
})->middleware('auth', 'hubController')->name('hubController');



//! Controladores

Route::get('/productosDest', [ProductoDestacadoGeneralController::class,'index']);

Route::get('/userAutenticate', [UsertController::class,'index']);

Route::post('importProduct', [editProductsController::class,'store'])->name('importProduct');

Route::post('/editProduct/{id}', [productoAdminController::class,'update'])->name('editProduct');


Route::post('productoAdmin', [productoAdminController::class, 'store'])->name('productoAdmin');

Route::delete('/producto/{id}', [productoAdminController::class, 'destroy'])->name('producto.destroy');

Route::post('/producto/{id}', [productoAdminController::class, 'show'])->name('producto.show');






require __DIR__.'/auth.php';


