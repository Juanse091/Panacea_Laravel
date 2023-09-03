<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 * 
 * @property int $ID
 * @property Carbon $Date_Venta
 * @property float $Total
 *
 * @package App\Models
 */
class Venta extends Model
{
	protected $table = 'ventas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'Date_Venta' => 'datetime',
		'Total' => 'float'
	];

	protected $fillable = [
		'ID',
		'Date_Venta',
		'Total'
	];
}
