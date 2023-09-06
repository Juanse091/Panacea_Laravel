<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VentasAdmin
 * 
 * @property int $ID
 * @property int|null $No_Orden
 * @property Carbon $Fecha_Venta
 * @property string $Estado_Factura
 * @property float $Total
 *
 * @package App\Models
 */
class VentasAdmin extends Model
{
	protected $table = 'ventas_admin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'No_Orden' => 'int',
		'Fecha_Venta' => 'datetime',
		'Total' => 'float'
	];

	protected $fillable = [
		'ID',
		'No_Orden',
		'Fecha_Venta',
		'Estado_Factura',
		'Total'
	];
}
