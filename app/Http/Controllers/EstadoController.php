<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /*$estados = Estado::all();
    return view('cliente.create', compact('estados'));*/

    public function index(){
        /*$estados = Estado::all()->pluck('id_estado_cliente','estado_cliente');
        return view('cliente.form', compact('estados', 'estado_cliente'));*/
    }

}
