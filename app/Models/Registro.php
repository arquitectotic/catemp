<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $fecha_registro
 * @property $hora_registro
 * @property $user_id
 * @property $id_cliente
 * @property $id_empresa
 * @property $id_servicio
 * @property $id_poliza
 * @property $id_canal
 * @property $id_contacto
 * @property $zona_contacto
 * @property $id_accion
 * @property $id_etapa
 * @property $fecha_proxima_accion
 * @property $created_at
 * @property $updated_at
 *
 * @property Accion $accion
 * @property Canal $canal
 * @property Cliente $cliente
 * @property Contacto $contacto
 * @property Empresa $empresa
 * @property Etapa $etapa
 * @property Poliza $poliza
 * @property Servicio $servicio
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
		'fecha_registro' => 'required',
		'hora_registro' => 'required',
		'user_id' => 'required',
		'id_cliente' => 'required',
		'id_empresa' => 'required',
		'id_poliza' => 'required',
		'id_canal' => 'required',
		'id_contacto' => 'required',
		'id_accion' => 'required',
		'id_etapa' => 'required',
		'id_servicio' => 'required',
		'zona_contacto' => 'required',
		'fecha_proxima_accion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_registro','hora_registro','user_id','id_cliente','id_empresa','id_servicio','id_poliza','id_canal','id_contacto','zona_contacto','id_accion','id_etapa','fecha_proxima_accion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function accion()
    {
        return $this->hasOne('App\Models\Accion', 'id', 'id_accion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function canal()
    {
        return $this->hasOne('App\Models\Canal', 'id', 'id_canal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contacto()
    {
        return $this->hasOne('App\Models\Contacto', 'id', 'id_contacto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'id_empresa');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function etapa()
    {
        return $this->hasOne('App\Models\Etapa', 'id', 'id_etapa');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function poliza()
    {
        return $this->hasOne('App\Models\Poliza', 'id', 'id_poliza');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'id_servicio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
