<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $Codigo_Producto
 * @property string $Nombre_Producto
 * @property string $Imagen_Prod
 * @property string $Descripcion_Producto
 * @property int $Minimo
 * @property int $Maximo
 * @property int $Existencia
 * @property float $Valor_Unitario
 * @property int $Categoria_Producto_idCategoria_Producto
 * @property int $Tipo_Producto_idTipo_Producto
 * @property int $Presentacion_Producto_idPresentacion_Producto
 * @property string $Marca
 * @property string $Pais_Produccion
 * @property string $Cantidad
 * @property string $Publico
 * @property int $VentaLibre
 * @property int|null $Unidades_Paquete
 * @property string|null $Alto_Item
 * @property string|null $Ancho_Item
 * @property string|null $Profundidad_Item
 * @property int|null $Calificacion
 * @property int|null $Contador
 * 
 * @property CategoriaProducto $categoria_producto
 * @property PresentacionProducto $presentacion_producto
 * @property TipoProducto $tipo_producto
 * @property Collection|Factura[] $facturas
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'producto';
	protected $primaryKey = 'Codigo_Producto';
	public $timestamps = false;

	protected $casts = [
		'Minimo' => 'int',
		'Maximo' => 'int',
		'Existencia' => 'int',
		'Valor_Unitario' => 'float',
		'Categoria_Producto_idCategoria_Producto' => 'int',
		'Tipo_Producto_idTipo_Producto' => 'int',
		'Presentacion_Producto_idPresentacion_Producto' => 'int',
		'VentaLibre' => 'int',
		'Unidades_Paquete' => 'int',
		'Calificacion' => 'int',
		'Contador' => 'int'
	];

	protected $fillable = [
		'Nombre_Producto',
		'Imagen_Prod',
		'Descripcion_Producto',
		'Minimo',
		'Maximo',
		'Existencia',
		'Valor_Unitario',
		'Categoria_Producto_idCategoria_Producto',
		'Tipo_Producto_idTipo_Producto',
		'Presentacion_Producto_idPresentacion_Producto',
		'Marca',
		'Pais_Produccion',
		'Cantidad',
		'Publico',
		'VentaLibre',
		'Unidades_Paquete',
		'Alto_Item',
		'Ancho_Item',
		'Profundidad_Item',
		'Calificacion',
		'Contador'
	];

	public function categoria_producto()
	{
		return $this->belongsTo(CategoriaProducto::class, 'Categoria_Producto_idCategoria_Producto');
	}

	public function presentacion_producto()
	{
		return $this->belongsTo(PresentacionProducto::class, 'Presentacion_Producto_idPresentacion_Producto');
	}

	public function tipo_producto()
	{
		return $this->belongsTo(TipoProducto::class, 'Tipo_Producto_idTipo_Producto');
	}

	public function facturas()
	{
		return $this->belongsToMany(Factura::class, 'factura_has_producto', 'PRODUCTO_Codigo_Producto', 'FACTURA_idFactura')
					->withPivot('USUARIO_idUsuario', 'Cantidad', 'Subtotal', 'Impuesto_Iva', 'Descuento');
	}
}
