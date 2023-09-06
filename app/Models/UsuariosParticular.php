<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuariosParticular
 * 
 * @property int $ID
 * @property string $Nombre_Usuario
 * @property string $Tipo usuario
 *
 * @package App\Models
 */
class UsuariosParticular extends Model
{
	protected $table = 'usuarios_particular';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int'
	];

	protected $fillable = [
		'ID',
		'Nombre_Usuario',
		'Tipo usuario'
	];
}
