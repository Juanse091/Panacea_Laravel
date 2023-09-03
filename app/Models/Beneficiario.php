<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Beneficiario
 * 
 * @property int $NUIP
 * @property int $PERSONA_NUIP
 * 
 * @property Persona $persona
 *
 * @package App\Models
 */
class Beneficiario extends Model
{
	protected $table = 'beneficiarios';
	protected $primaryKey = 'NUIP';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'NUIP' => 'int',
		'PERSONA_NUIP' => 'int'
	];

	protected $fillable = [
		'PERSONA_NUIP'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'PERSONA_NUIP');
	}
}
