<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FacturaHasProducto
 * 
 * @property int $USUARIO_idUsuario
 * @property int $FACTURA_idFactura
 * @property int $PRODUCTO_Codigo_Producto
 * @property int|null $Cantidad
 * @property float $Subtotal
 * @property float $Impuesto_Iva
 * @property float|null $Descuento
 * 
 * @property Factura $factura
 * @property Producto $producto
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class FacturaHasProducto extends Model
{
	protected $table = 'factura_has_producto';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'USUARIO_idUsuario' => 'int',
		'FACTURA_idFactura' => 'int',
		'PRODUCTO_Codigo_Producto' => 'int',
		'Cantidad' => 'int',
		'Subtotal' => 'float',
		'Impuesto_Iva' => 'float',
		'Descuento' => 'float'
	];

	protected $fillable = [
		'Cantidad',
		'Subtotal',
		'Impuesto_Iva',
		'Descuento'
	];

	public function factura()
	{
		return $this->belongsTo(Factura::class, 'FACTURA_idFactura');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'PRODUCTO_Codigo_Producto');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'USUARIO_idUsuario');
	}
}
