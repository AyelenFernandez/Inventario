<?php

namespace app\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class partidas
 * @package App\Models
 * @version December 14, 2016, 8:55 pm UTC
 */
class Responsable extends Model
{
   	use SoftDeletes;

    public $table = 'responsables';

  	protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public $fillable = [
        'nombre',
        'apellido',
        'dni',
        'email',
        'telefono'
    ];

	protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'dni' => 'integer',
        'email' => 'string',
        'telefono' => 'string'
    ];

	public static $rules = [
      'nombre' => 'required',
      'apellido' => 'required',
      'dni' => 'required|unique',
      'email' => 'required|unique',
      'telefono' => 'required'
    ];
}