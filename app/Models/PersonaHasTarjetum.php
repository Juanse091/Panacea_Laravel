<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonaHasTarjetum
 * 
 * @property int $PERSONA_NUIP
 * @property int $TARJETA_idTarjeta
 * 
 * @property Persona $persona
 * @property Tarjetum $tarjetum
 *
 * @package App\Models
 */
class PersonaHasTarjetum extends Model
{
	protected $table = 'persona_has_tarjeta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PERSONA_NUIP' => 'int',
		'TARJETA_idTarjeta' => 'int'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'PERSONA_NUIP');
	}

	public function tarjetum()
	{
		return $this->belongsTo(Tarjetum::class, 'TARJETA_idTarjeta');
	}
}
