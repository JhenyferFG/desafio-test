<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cliente::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::where('id', $id)->get();

    }

    public function showPlaca($numero)
    {
        return Cliente::where(DB::raw('lower(placa_carro)'), 'like', strtolower("%{$numero}"))->get();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $cliente = Cliente::where('id', $id)->first();
        if(!empty($cliente)){
            $cliente->update($request->all());
            return 'Cliente atualizado.';
        }else{
            return 'Cliente não encontrado';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::where('id', $id)->first();
        if(!empty($cliente)){
            $cliente->delete();
            return 'Cliente excluído com sucesso.';
        }else{
            return 'Cliente não encontrado';
        }
    }
}
