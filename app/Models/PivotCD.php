<?php

namespace app\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class partidas
 * @package App\Models
 * @version December 14, 2016, 8:55 pm UTC
 */
class PivotCD extends Model
{
   	use SoftDeletes;

    public $table = 'pivot_categoria_detalle';

  	protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public $fillable = [
        'categoria_fk',
        'detalle_fk'
    ];

	protected $casts = [
        'categoria_fk' => 'integer',
        'detalle_fk' => 'integer'

    ];

	
}