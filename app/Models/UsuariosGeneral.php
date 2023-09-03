<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuariosGeneral
 * 
 * @property string $Nombre_Usuario
 * @property int $ID
 *
 * @package App\Models
 */
class UsuariosGeneral extends Model
{
	protected $table = 'usuarios_general';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int'
	];

	protected $fillable = [
		'Nombre_Usuario',
		'ID'
	];
}
