<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaProducto
 * 
 * @property int $idCategoria_Producto
 * @property string $Nombre_Categoria
 * @property string $Imagen_Cat
 * @property string $Descripcion_Categoria
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class CategoriaProducto extends Model
{
	protected $table = 'categoria_producto';
	protected $primaryKey = 'idCategoria_Producto';
	public $timestamps = false;

	protected $fillable = [
		'Nombre_Categoria',
		'Imagen_Cat',
		'Descripcion_Categoria'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'Categoria_Producto_idCategoria_Producto');
	}
}
