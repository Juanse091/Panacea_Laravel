<?php


use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\Producto;
use App\Models\CategoriaProducto;

use App\Http\Controllers\ProductoDestacadoGeneralController;
use App\Http\Controllers\UsertController;
use App\Http\Controllers\editProductsController;
use App\Http\Controllers\productoAdminController;
use App\Http\Controllers\usuarioAdminController;

//? VISTA HOMEPAGE

Route::get('/', function () {
    return Inertia::render('HomePage', [
        'userAuth' => !Auth::check(),
        'canRegister' => Route::has('register'),
    ]);
})->name('homepage');



//? VISTA MEDICAMENTOS

Route::get('/medicamento/id={id}', function ($id, Producto $producto) {
    // Obtén el producto por su ID
    $producto = $producto->findOrFail($id);
    
    // Accede a la relación "categoriaProducto" para obtener la categoría
    $categoria = $producto->categoria_producto;
    $tipo = $producto->tipo_producto;
    $existencia = $producto->Existencia;
    
    // Accede al atributo "Nombre" de la tabla "CategoriaProducto"
    $nombreCategoria = $categoria->Nombre_Categoria;
    $nombreTipo = $tipo->Nombre_tipo_prod;

    return Inertia::render('MedicamentoPage', [
        'id' => $id,
        'producto' => $producto,
        'nombreCategoria' => $nombreCategoria,
        'nombreTipo' => $nombreTipo,
        'existencia' => $existencia
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

    Route::group(['prefix' => 'productos'], function(){
        Route::get('/', function () {
            return Inertia::render('ProductoAdminPage', [
                'ruta_productos' => route('productoAdmin'),
            ]);
        })->name('adminHUB.Productos');

        Route::get('/editarProductos/{accion?}', function () {
            return Inertia::render('EditProductoPage');
        })->name('adminHUB.editarProductos');
    });

    Route::group(['prefix' => 'usuarios'], function(){
        Route::get('/', function () {
            return Inertia::render('UsuarioAdminPage');
        })->name('adminHUB.Usuarios');

        Route::get('/editarUsuarios/{accion?}', function () {
            return Inertia::render('EditUsuarioPage');
        })->name('adminHUB.editarUsuarios');
    });
});

//! PARTICULAR
Route::group(['prefix'=> 'particular'], function () {
    Route::get('/', function () {
        return Inertia::render('ParticularHubPage');
    })->name('hubController')->middleware('hubController');

    Route::group(['prefix'=> 'pedidos'], function () {
        Route::get('/', function () {
            return Inertia::render('MisPedidosPage');
        })->name('particularHUB.Pedidos');
    });
})->middleware('auth');


//? CONTROLADORES

Route::get('/productosDest', [ProductoDestacadoGeneralController::class,'index']);

Route::get('/userAutenticate', [UsertController::class,'index']);


//* Controladores de los productos_admin

Route::post('importProduct', [editProductsController::class,'store'])->name('importProduct'); //! Insertar producto a la base de datos

Route::post('/editProduct/{id}', [productoAdminController::class,'update'])->name('editProduct'); //! Editar producto en la base de datos

Route::post('productoAdmin', [productoAdminController::class, 'store'])->name('productoAdmin'); //! Visualizar los productos por categoria

Route::delete('/producto/{id}', [productoAdminController::class, 'destroy'])->name('producto.destroy');  //! Eliminar producto seleccionado

Route::post('/producto/{id}', [productoAdminController::class, 'show'])->name('producto.show'); //! Mostrar el producto para editar


//* Controladores de los usuarios_admin

Route::post('/usuariosAdmin', [usuarioAdminController::class, 'store'])->name('usuariosAdmin'); //! Visualizar los usuarios por categoria

Route::post('/editUsuarios/{id}', [usuarioAdminController::class, 'update'])->name('editUsuarios');
 





require __DIR__.'/auth.php';


