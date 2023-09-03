<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 * 
 * @property int $NUIP
 * @property string $Nombre_Persona
 * @property string $Email
 * @property int $Telefono_Movil
 * @property int|null $Telefono_Fijo
 * @property string $Departamento
 * @property string $Municipio
 * @property string $Direccion
 * @property Carbon|null $Fecha_Nacimiento
 * @property string|null $Lugar_Nacimiento
 * @property string|null $Estado_Civil
 * @property string|null $Tipo_Sangre
 * @property int|null $Genero
 * @property string|null $Alergias
 * @property string|null $Obs_Clinicas
 * @property int|null $Cotizante
 * 
 * @property Collection|Beneficiario[] $beneficiarios
 * @property Collection|PersonaHasTarjetum[] $persona_has_tarjeta
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Persona extends Model
{
	protected $table = 'persona';
	protected $primaryKey = 'NUIP';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'NUIP' => 'int',
		'Telefono_Movil' => 'int',
		'Telefono_Fijo' => 'int',
		'Fecha_Nacimiento' => 'datetime',
		'Genero' => 'int',
		'Cotizante' => 'int'
	];

	protected $fillable = [
		'Nombre_Persona',
		'Email',
		'Telefono_Movil',
		'Telefono_Fijo',
		'Departamento',
		'Municipio',
		'Direccion',
		'Fecha_Nacimiento',
		'Lugar_Nacimiento',
		'Estado_Civil',
		'Tipo_Sangre',
		'Genero',
		'Alergias',
		'Obs_Clinicas',
		'Cotizante'
	];

	public function beneficiarios()
	{
		return $this->hasMany(Beneficiario::class, 'PERSONA_NUIP');
	}

	public function persona_has_tarjeta()
	{
		return $this->hasMany(PersonaHasTarjetum::class, 'PERSONA_NUIP');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'PERSONA_NUIP');
	}
}
