<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $idUsuario
 * @property string $Nombre_Usuario
 * @property string $Hast
 * @property string|null $Salt
 * @property string $Estado_Usuario
 * @property int $Tipo_Usuario_idTipo_Usuario
 * @property int $PERSONA_NUIP
 * 
 * @property Persona $persona
 * @property TipoUsuario $tipo_usuario
 * @property Collection|FacturaHasProducto[] $factura_has_productos
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'idUsuario';
	public $timestamps = false;

	protected $casts = [
		'Tipo_Usuario_idTipo_Usuario' => 'int',
		'PERSONA_NUIP' => 'int'
	];

	protected $fillable = [
		'Nombre_Usuario',
		'Hast',
		'Salt',
		'Estado_Usuario',
		'Tipo_Usuario_idTipo_Usuario',
		'PERSONA_NUIP'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'PERSONA_NUIP');
	}

	public function tipo_usuario()
	{
		return $this->belongsTo(TipoUsuario::class, 'Tipo_Usuario_idTipo_Usuario');
	}

	public function factura_has_productos()
	{
		return $this->hasMany(FacturaHasProducto::class, 'USUARIO_idUsuario');
	}
}
