<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoProducto
 * 
 * @property int $idTipo_Producto
 * @property string $Nombre_tipo_prod
 * @property string $Descripcion_TipProd
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class TipoProducto extends Model
{
	protected $table = 'tipo_producto';
	protected $primaryKey = 'idTipo_Producto';
	public $timestamps = false;

	protected $fillable = [
		'Nombre_tipo_prod',
		'Descripcion_TipProd'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'Tipo_Producto_idTipo_Producto');
	}
}
