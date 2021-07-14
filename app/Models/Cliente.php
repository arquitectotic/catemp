<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $documento
 * @property $id_tipo_documento
 * @property $nombre
 * @property $telefono
 * @property $email
 * @property $direccion
 * @property $municipio
 * @property $id_estado_cliente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'documento' => 'required',
		'id_tipo_documento' => 'required',
		'nombre' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'direccion' => 'required',
		'municipio' => 'required',
    'id_estado_cliente' => 'required',  
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','id_tipo_documento','nombre','telefono','email','direccion','municipio','id_estado_cliente'];

      //Relacion uno a uno 
      public function documento(){
          //return $this->hasOne(Cliente::class);
          return $this->hasOne('App\Models\Documento');
      }

      public function estado(){
          return $this->hasOne('App\Models\Estado', 'id', 'estado_cliente');
      }

}
