<?php

namespace advogado\Http\Controllers;

use advogado\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller {

  private $cliente;
  
  public function __construct() {
    $this->cliente = new Cliente();
  }
  
  public function index() {
    $clientes = Cliente::all();
    return view("clientes.index", [
        'clientes' => $clientes
    ]);
  }

  public function novo() {
    return view("clientes.formulario");
  }

  public function editar($idcliente) {
    $cliente = $this->cliente->find($idcliente);
    return view("clientes.editar", [
        'cliente' => $cliente
    ]); 
  }

  public function gravar(Request $request) {
    Cliente::create($request->all());
    return redirect("/clientes")->with("message", "Cliente gravado com sucesso!");
  }
  
  public function atualizar(Request $request) {
    $cliente = $this->cliente->find($request->id);
    $cliente->update($request->all());
    return redirect("/clientes");
  }

}
