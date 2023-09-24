<?php


use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductoDestacadoGeneralController;
use App\Http\Controllers\UsertController;
use App\Models\Producto;
use App\Models\CategoriaProducto;


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

//* HUB 

//? ADMIN

Route::get('/admin', function (){
    return Inertia::render('AdminHubPage', [

    ]);
})->middleware('auth')->name('adminHUB');

//? PARTICULAR

Route::get('/particulares', function (){
    return Inertia::render('ParticularHubPage', [

    ]);
})->middleware('auth', 'hubController')->name('hubController');



//! Controladores

Route::get('/productosDest', [ProductoDestacadoGeneralController::class,'index']);
Route::get('/userAutenticate', [UsertController::class,'index']);

Route::get('/asd', function(){
    return Inertia::render('Login', []);
});






require __DIR__.'/auth.php';


