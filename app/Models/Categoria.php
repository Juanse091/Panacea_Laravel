<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 * 
 * @property int $ID
 * @property string $Nombre_Categoria
 * @property string $URL_Img
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categorias';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int'
	];

	protected $fillable = [
		'ID',
		'Nombre_Categoria',
		'URL_Img'
	];
}
