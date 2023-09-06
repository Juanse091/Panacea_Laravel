<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidosClient
 * 
 * @property int $ID
 * @property int|null $No_Orden
 * @property Carbon $Fecha_Venta
 * @property string $Estado_Factura
 *
 * @package App\Models
 */
class PedidosClient extends Model
{
	protected $table = 'pedidos_client';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'No_Orden' => 'int',
		'Fecha_Venta' => 'datetime'
	];

	protected $fillable = [
		'ID',
		'No_Orden',
		'Fecha_Venta',
		'Estado_Factura'
	];
}
