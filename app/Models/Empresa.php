<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombre
 * @property $id_tipo_empresa
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 *
 * @property TipoEmpresa $tipoEmpresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'id_tipo_empresa' => 'required',
		//'observacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','id_tipo_empresa','observacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoEmpresa()
    {
        return $this->hasOne('App\Models\TipoEmpresa', 'id', 'id_tipo_empresa');
    }
    

}
