<?php

namespace app\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class partidas
 * @package App\Models
 * @version December 14, 2016, 8:55 pm UTC
 */
class Alta extends Model
{
   	use SoftDeletes;

    public $table = 'altas';

  	protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public $fillable = [
        'n_alta',
        'motivo_alta_fk',
        'fecha_alta',
        'tipo_comprobante_fk',
        'fecha_emision'

    ];

	protected $casts = [
        'n_alta' => 'integer',
        'motivo_alta_fk' => 'string',
        'fecha_alta' => 'date',
        'tipo_comprobante_fk' => 'integer',
        'fecha_emision' => 'date'
    ];

	public static $rules = [
      'n_alta' => 'required|unique',
      'motivo_alta_fk' => 'required',
      'fecha_alta' => 'required',
      'tipo_comprobante_fk' => 'required',
      'fecha_emision' => 'required'

    ];
}