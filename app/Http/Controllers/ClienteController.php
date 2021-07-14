<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Estado;
use Illuminate\Http\Request;

/**
 * Class ClienteController
 * @package App\Http\Controllers
 */
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate();

        return view('cliente.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());
    }

    /**
     * Show the form for creating a new resource.

     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new Cliente(); //compact devuelve un array con los datos del cliente
        return view('cliente.create', compact('cliente'));
    }

    //metodo opcional para comprobar dropdown list estados 
    public function getEstates()
    {
        $estados = Estado::pluck("estado_cliente","id");
        return view('cliente.create',compact('estados'));
    }

    /*public function create()
    {
        $cliente = new Cliente();
        //variable que permite obtener estados del modelo (se agrego compact('estado'))
        $estados = Estado::all();
        //$estados = Estado::pluck('id','estado_cliente');
        return view('cliente.create', compact('cliente'), compact('estados'));
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cliente::$rules);

        $cliente = Cliente::create($request->all());

        /*return redirect()->route('clientes.index')
            ->with('success', 'Cliente created successfully.');*/
        
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        request()->validate(Cliente::$rules);

        $cliente->update($request->all());

        /*return redirect()->route('clientes.index')
            ->with('success', 'Cliente updated successfully');*/
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id)->delete();

        /*return redirect()->route('clientes.index')
            ->with('success', 'Cliente deleted successfully');*/
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado exitosamente');
    }
}
