<?php

namespace app\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class partidas
 * @package App\Models
 * @version December 14, 2016, 8:55 pm UTC
 */
class Item extends Model
{
   	use SoftDeletes;

    public $table = 'items';

  	protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public $fillable = [
        'alta_fk',
        'item_contenedor_fk',
        'lugar_asignado_fk',
        'estado_fk',
        'categoria_fk'
    ];

	protected $casts = [
        'alta_fk' => 'integer',
        'item_contenedor_fk' => 'integer',
        'lugar_asignado_fk' => 'integer',
        'estado_fk' => 'integer',
        'categoria_fk' => 'integer'
    ];

	public static $rules = [
      'alta_fk' => 'required',
      'estado_fk' => 'required',
      'categoria_fk' => 'required'
    ];
}