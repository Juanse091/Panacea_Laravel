<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleUserAfiliadoP1
 * 
 * @property int $NUIP
 * @property string $Nombre
 * @property string $Usuario
 * @property string $Contraseña
 * @property string $Estado
 * @property string $Tipo_Usuario
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
 * @package App\Models
 */
class DetalleUserAfiliadoP1 extends Model
{
	protected $table = 'detalle_user_afiliado_p1';
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
		'NUIP',
		'Nombre',
		'Usuario',
		'Contraseña',
		'Estado',
		'Tipo_Usuario',
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
}
