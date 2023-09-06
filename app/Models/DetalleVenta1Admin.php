<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleVenta1Admin
 * 
 * @property int $Codigo_Factura
 * @property int $PRODUCTO_Codigo_Producto
 * @property string $Imagen_Prod
 * @property string $Estado_Factura
 * @property float $Total
 * @property string $Departamento
 * @property string $Municipio
 * @property string $Direccion
 *
 * @package App\Models
 */
class DetalleVenta1Admin extends Model
{
	protected $table = 'detalle_venta1_admin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Codigo_Factura' => 'int',
		'PRODUCTO_Codigo_Producto' => 'int',
		'Total' => 'float'
	];

	protected $fillable = [
		'Codigo_Factura',
		'PRODUCTO_Codigo_Producto',
		'Imagen_Prod',
		'Estado_Factura',
		'Total',
		'Departamento',
		'Municipio',
		'Direccion'
	];
}
