<?php

namespace advogado\Http\Controllers;

use advogado\Processo;
use advogado\Cliente;
use advogado\TipoProcesso;
use Illuminate\Http\Request;

class ProcessoController extends Controller {

  private $processo;

  public function __construct() {
    $this->processo = new Processo();
  }

  public function index() {
    //Carregar os clientes
    $clientes = Cliente::all();
    //Carregar os tipos de processo
    $tipoprocessos = TipoProcesso::all();
    //Carregar os processos
    $processos = Processo::all();
    return view("processos.index", [
        'processos' => $processos,
        'clientes' => $clientes,
        'tipoprocessos' => $tipoprocessos
    ]);
  }

  public function novo() {
    //Carregar os clientes
    $clientes = Cliente::all();
    //Carregar os tipos de processo
    $tipoprocessos = TipoProcesso::all();
    return view("processos.formulario", [
        'clientes' => $clientes,
        'tipoprocessos' => $tipoprocessos
    ]);
  }

  public function editar($idprocesso) {
    //Carregar o processo
    $processo = $this->processo->find($idprocesso);
    //Carregar os clientes
    $clientes = Cliente::all();
    //Carregar os tipos de processo
    $tipoprocessos = TipoProcesso::all();
    return view("processos.editar", [
        'processo' => $processo,
        'clientes' => $clientes,
        'tipoprocessos' => $tipoprocessos
    ]);
  }

  public function gravar(Request $request) {
    Processo::create($request->all());
    return redirect("/processos")->with("message", "Processo gravada com sucesso!");
  }

  public function atualizar(Request $request) {
    $processo = $this->processo->find($request->id);
    $processo->update($request->all());
    return redirect("/processos");
  }

  public function excluir($idprocesso) {
    $processo = $this->processo->find($idprocesso);
    $processo->delete();
    return redirect(url('processos'))->with('success', 'Excluído!');
  }

}
