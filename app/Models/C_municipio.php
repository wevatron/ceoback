<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class C_municipio
 * @package App\Models
 * @version February 5, 2020, 11:51 pm UTC
 *
 * @property string descripcion
 */
class C_municipio extends Model
{
 
    public $table = 'c_municipios';
    public $timestamps = false;


    public $fillable = [
        'nombre',
        'reps_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reps_id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    public function Estado()
    {
        $this->hasOne(C_estados_rep::class,'id');
    }

    
}