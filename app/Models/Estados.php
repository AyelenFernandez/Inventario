<?php

namespace app\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class partidas
 * @package App\Models
 * @version December 14, 2016, 8:55 pm UTC
 */
class Estado extends Model
{
   	use SoftDeletes;

    public $table = 'estados';

  	protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public $fillable = [
        'nombre',
    ];

	protected $casts = [
        'nombre' => 'string'
    ];

	public static $rules = [
      'nombre' => 'required|unique'
    ];
}