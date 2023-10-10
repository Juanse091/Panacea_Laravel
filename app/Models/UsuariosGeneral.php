<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuariosGeneral
 * 
 * @property int $ID
 * @property string $Nombre_Usuario
 * @property string $Tipo_usuario
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
		'ID',
		'Nombre_Usuario',
		'Tipo_usuario'
	];
}
