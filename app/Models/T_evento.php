<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\C_tipo_evento;
use App\Models\T_imagenes;

class T_evento extends Model
{
    use SoftDeletes;

    public $table = 't_eventos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_evento',
        'descripcion_evento',
        'nombre_conferencista',
        'cargo',
        'empresa',
        'bio',
        'fecha',
        'inicio',
        'fin',
        'url',
        'url_img',
        'tipo_evento_id',
        'taller_id',
        'facebook',
        'instagram',
        'youtube',
        'twitter',
        'panel1',
        'panel2',
        'panel3',
        'panel4',
        'empresa_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_evento' => 'string',
        'descripcion_evento' => 'string',
        'nombre_conferencista' => 'string',
        'cargo' => 'string',
        'empresa' => 'string',
        'bio' => 'string',
        'fecha' => 'string',
        'inicio' => 'string',
        'url' => 'string',
        'fin' => 'string',
        'url_img' => 'string',
        'tipo_evento_id' => 'integer',
        'taller_id' => 'integer',
        'facebook'=>'string',
        'instagram'=>'string',
        'youtube'=>'string',
        'twitter'=>'string',
        'empresa_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_evento' => 'required',
        'descripcion_evento' => 'max:253',
        'nombre_conferencista' =>'max:253',
        'cargo' =>'max:253',
        'empresa' =>'max:253',
        'bio' =>'max:800',
        'tipo_evento_id' => 'required'
    ];

    public function TipoEvento()
    {
        return $this->hasOne(C_tipo_evento::class,'id','tipo_evento_id');
    }

    public function scopeBuscar($query, $fecha)
	{
		return $query->where('tipo_evento_id','=', "$fecha");
    }

    public function Imagenes()
    {
        return $this->hasMany(T_imagenes::class,'t_evento_id','id');
    }
    public function Like()
    {
        return $this->hasOne(T_like::class,'t_evento_id','id');
    }
    


}
