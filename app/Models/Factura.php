<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $idFactura
 * @property Carbon $Fecha_Fact
 * @property int|null $No_Orden
 * @property float $Total
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'factura';
	protected $primaryKey = 'idFactura';
	public $timestamps = false;

	protected $casts = [
		'Fecha_Fact' => 'datetime',
		'No_Orden' => 'int',
		'Total' => 'float'
	];

	protected $fillable = [
		'Fecha_Fact',
		'No_Orden',
		'Total'
	];

	public function productos()
	{
		return $this->belongsToMany(Producto::class, 'factura_has_producto', 'FACTURA_idFactura', 'PRODUCTO_Codigo_Producto')
					->withPivot('USUARIO_idUsuario', 'Cantidad', 'Subtotal', 'Impuesto_Iva', 'Descuento');
	}
}
