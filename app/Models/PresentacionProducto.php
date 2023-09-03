<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PresentacionProducto
 * 
 * @property int $idPresentacion_Producto
 * @property string $Nombre_Presentacion
 * @property string $Descripcion_Presentacion
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class PresentacionProducto extends Model
{
	protected $table = 'presentacion_producto';
	protected $primaryKey = 'idPresentacion_Producto';
	public $timestamps = false;

	protected $fillable = [
		'Nombre_Presentacion',
		'Descripcion_Presentacion'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'Presentacion_Producto_idPresentacion_Producto');
	}
}
