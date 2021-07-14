<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $id_tipo_servicio
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @property TipoServicio $tipoServicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'id_tipo_servicio' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_servicio','precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoServicio()
    {
        return $this->hasOne('App\Models\TipoServicio', 'id', 'id_tipo_servicio');
    }
    

}
