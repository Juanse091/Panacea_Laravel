<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleUserConsorcio
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
 *
 * @package App\Models
 */
class DetalleUserConsorcio extends Model
{
	protected $table = 'detalle_user_consorcio';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'NUIP' => 'int',
		'Telefono_Movil' => 'int',
		'Telefono_Fijo' => 'int'
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
		'Direccion'
	];
}
