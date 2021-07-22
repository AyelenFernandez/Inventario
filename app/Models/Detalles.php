<?php

namespace app\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class partidas
 * @package App\Models
 * @version December 14, 2016, 8:55 pm UTC
 */
class Detalle extends Model
{
   	use SoftDeletes;

    public $table = 'detalles';

  	protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public $fillable = [
        'nombre',
        'tipo'
    ];

	protected $casts = [
        'nombre' => 'string',
        'tipo' => 'string'
    ];
	
}