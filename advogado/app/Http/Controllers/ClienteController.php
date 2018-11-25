<?php

namespace advogado\Http\Controllers;

use advogado\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller {

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
    var_dump($idcliente);
    //return view("clientes.formulario");
  }

  public function gravar(Request $request) {
    Cliente::create($request->all());
    return redirect("/clientes")->with("message", "Cliente gravado com sucesso!");
  }

}
