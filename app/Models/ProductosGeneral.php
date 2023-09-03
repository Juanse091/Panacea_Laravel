<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductosGeneral
 * 
 * @property int $Codigo
 * @property string $Nombre_Producto
 * @property string $URL_Img
 * @property int $Stock
 *
 * @package App\Models
 */
class ProductosGeneral extends Model
{
	protected $table = 'productos_general';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Codigo' => 'int',
		'Stock' => 'int'
	];

	protected $fillable = [
		'Codigo',
		'Nombre_Producto',
		'URL_Img',
		'Stock'
	];
}
