<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\endCliente;
use App\Models\endereco;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create',['cliente' => new Cliente()]);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
        ]);

        $cliente = new Cliente();
        $endereco  = new endCliente();
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->cpf = $request->input('cpf');
        $cliente->telefone = $request->input('telefone');
        $cliente->save();

        //Save address
        $endereco->cliente_id = $cliente->id;
        $endereco->rua = $request->input('rua');
        $endereco->bairro = $request->input('bairro');
        $endereco->cidade = $request->input('cidade');
        $endereco->uf = $request->input('uf');  
        $endereco->cep=$request->input('cep');
        $endereco->complemento=$request->input('complemento');
        $endereco->numero=$request->input('numero');
        $endereco->save();
        
       
        
        
       
        return redirect()->route('clientes.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
