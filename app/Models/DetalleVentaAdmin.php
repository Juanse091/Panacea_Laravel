<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleVentaAdmin
 * 
 * @property int $Codigo_Factura
 * @property Carbon $Fecha_Factura
 * @property int|null $No_Orden
 * @property string $Estado_Factura
 * @property int $NUIP
 * @property string $Comprador
 * @property int $Movil
 * @property string $Tipo_Usuario
 * @property int $Codigo_Producto
 * @property string $Nombre_Producto
 * @property int|null $Cantidad
 * @property float $subtotal
 * @property float $Impuesto_Iva
 * @property float|null $Descuento
 * @property float $Total
 *
 * @package App\Models
 */
class DetalleVentaAdmin extends Model
{
	protected $table = 'detalle_venta_admin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Codigo_Factura' => 'int',
		'Fecha_Factura' => 'datetime',
		'No_Orden' => 'int',
		'NUIP' => 'int',
		'Movil' => 'int',
		'Codigo_Producto' => 'int',
		'Cantidad' => 'int',
		'subtotal' => 'float',
		'Impuesto_Iva' => 'float',
		'Descuento' => 'float',
		'Total' => 'float'
	];

	protected $fillable = [
		'Codigo_Factura',
		'Fecha_Factura',
		'No_Orden',
		'Estado_Factura',
		'NUIP',
		'Comprador',
		'Movil',
		'Tipo_Usuario',
		'Codigo_Producto',
		'Nombre_Producto',
		'Cantidad',
		'subtotal',
		'Impuesto_Iva',
		'Descuento',
		'Total'
	];
}
