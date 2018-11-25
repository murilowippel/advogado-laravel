<?php

namespace advogado\Http\Controllers;

use advogado\TipoProcesso;
use Illuminate\Http\Request;

class TipoProcessoController extends Controller {

  private $tipoprocesso;

  public function __construct() {
    $this->tipoprocesso = new TipoProcesso();
  }

  public function index() {
    $tipoprocessos = TipoProcesso::all();
    return view("tipoprocessos.index", [
        'tipoprocessos' => $tipoprocessos
    ]);
  }

  public function novo() {
    return view("tipoprocessos.formulario");
  }

  public function editar($idtipoprocesso) {
    $tipoprocesso = $this->tipoprocesso->find($idtipoprocesso);
    return view("tipoprocessos.editar", [
        'tipoprocesso' => $tipoprocesso
    ]);
  }

  public function gravar(Request $request) {
    TipoProcesso::create($request->all());
    return redirect("/tipoprocessos")->with("message", "Categoria de processo gravada com sucesso!");
  }

  public function atualizar(Request $request) {
    $tipoprocesso = $this->tipoprocesso->find($request->id);
    $tipoprocesso->update($request->all());
    return redirect("/tipoprocessos");
  }

  public function excluir($idtipoprocesso) {
    $tipoprocesso = $this->tipoprocesso->find($idtipoprocesso);
    $tipoprocesso->delete();
    return redirect(url('tipoprocessos'))->with('success', 'Excluído!');
  }

}
