<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarjetum
 * 
 * @property int $idTarjeta
 * @property string $Numero_tarjeta
 * @property Carbon $Fecha_caducidad
 * @property int $CVV
 * @property string $Tipo_Tarjeta
 * 
 * @property Collection|PersonaHasTarjetum[] $persona_has_tarjeta
 *
 * @package App\Models
 */
class Tarjetum extends Model
{
	protected $table = 'tarjeta';
	protected $primaryKey = 'idTarjeta';
	public $timestamps = false;

	protected $casts = [
		'Fecha_caducidad' => 'datetime',
		'CVV' => 'int'
	];

	protected $fillable = [
		'Numero_tarjeta',
		'Fecha_caducidad',
		'CVV',
		'Tipo_Tarjeta'
	];

	public function persona_has_tarjeta()
	{
		return $this->hasMany(PersonaHasTarjetum::class, 'TARJETA_idTarjeta');
	}
}
