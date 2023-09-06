<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoUsuario
 * 
 * @property int $idTipo_Usuario
 * @property string $Nombre_UT
 * @property string $Descripcion_Permisos
 * 
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class TipoUsuario extends Model
{
	protected $table = 'tipo_usuario';
	protected $primaryKey = 'idTipo_Usuario';
	public $timestamps = false;

	protected $fillable = [
		'Nombre_UT',
		'Descripcion_Permisos'
	];

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'Tipo_Usuario_idTipo_Usuario');
	}
}
