<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Empresa extends Model
{
    use HasFactory;
    
    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresa');
    }
}
