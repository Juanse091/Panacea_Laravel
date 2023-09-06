<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleProdCat4Admin
 * 
 * @property int $Codigo
 * @property string $Nombre_Producto
 * @property string $URL_Img
 * @property string $Descripcion
 * @property int $Minimo
 * @property int $Maximo
 * @property int $Existencia
 * @property float $Precio
 * @property string $Categoria
 * @property string $Tipo
 * @property string $Presentacion
 * @property string $Marca
 * @property string $Pais_Produccion
 * @property string $Cantidad
 * @property string $Publico
 * @property int $VentaLibre
 * @property int|null $Unidades_Paquete
 * @property string|null $Alto_Item
 * @property string|null $Ancho_Item
 * @property string|null $Profundidad_Item
 * @property int|null $Estrellas_Total
 * @property int|null $Total_Per_Votos
 *
 * @package App\Models
 */
class DetalleProdCat4Admin extends Model
{
	protected $table = 'detalle_prod_cat4_admin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Codigo' => 'int',
		'Minimo' => 'int',
		'Maximo' => 'int',
		'Existencia' => 'int',
		'Precio' => 'float',
		'VentaLibre' => 'int',
		'Unidades_Paquete' => 'int',
		'Estrellas_Total' => 'int',
		'Total_Per_Votos' => 'int'
	];

	protected $fillable = [
		'Codigo',
		'Nombre_Producto',
		'URL_Img',
		'Descripcion',
		'Minimo',
		'Maximo',
		'Existencia',
		'Precio',
		'Categoria',
		'Tipo',
		'Presentacion',
		'Marca',
		'Pais_Produccion',
		'Cantidad',
		'Publico',
		'VentaLibre',
		'Unidades_Paquete',
		'Alto_Item',
		'Ancho_Item',
		'Profundidad_Item',
		'Estrellas_Total',
		'Total_Per_Votos'
	];
}
