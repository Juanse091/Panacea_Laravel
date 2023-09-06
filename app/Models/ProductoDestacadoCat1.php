<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductoDestacadoCat1
 * 
 * @property int $Codigo
 * @property string $Nombre_Producto
 * @property string $URL_Img
 * @property float $Precio
 * @property int|null $Estrellas_Total
 * @property int|null $Total_Per_Votos
 *
 * @package App\Models
 */
class ProductoDestacadoCat1 extends Model
{
	protected $table = 'producto_destacado_cat1';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Codigo' => 'int',
		'Precio' => 'float',
		'Estrellas_Total' => 'int',
		'Total_Per_Votos' => 'int'
	];

	protected $fillable = [
		'Codigo',
		'Nombre_Producto',
		'URL_Img',
		'Precio',
		'Estrellas_Total',
		'Total_Per_Votos'
	];
}
