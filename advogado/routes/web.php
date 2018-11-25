<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Auth::routes();

Route::get('/', function () {
  return view('/home');
})->middleware('auth');

//Rotas para a rotina de Clientes
Route::group(["prefix" => "clientes"], function () {
  Route::get("/", "ClienteController@index")->middleware('auth');
  Route::get("/novo", "ClienteController@novo")->middleware('auth');
  Route::post("/gravar", "ClienteController@gravar")->middleware('auth');
  Route::get("/{idcliente}/editar", "ClienteController@editar")->middleware('auth');
  Route::post("/atualizar", "ClienteController@atualizar")->middleware('auth');
  Route::get("/{idcliente}/excluir", "ClienteController@excluir")->middleware('auth');
});

//Rotas para a rotina de Categorias de Processo
Route::group(["prefix" => "tipoprocessos"], function () {
  Route::get("/", "TipoProcessoController@index")->middleware('auth');
  Route::get("/novo", "TipoProcessoController@novo")->middleware('auth');
  Route::post("/gravar", "TipoProcessoController@gravar")->middleware('auth');
  Route::get("/{idtipoprocesso}/editar", "TipoProcessoController@editar")->middleware('auth');
  Route::post("/atualizar", "TipoProcessoController@atualizar")->middleware('auth');
  Route::get("/{idtipoprocesso}/excluir", "TipoProcessoController@excluir")->middleware('auth');
});

//Rotas para a rotina de processos
Route::group(["prefix" => "processos"], function () {
  Route::get("/", "ProcessoController@index")->middleware('auth');
  Route::get("/novo", "ProcessoController@novo")->middleware('auth');
  Route::post("/gravar", "ProcessoController@gravar")->middleware('auth');
  Route::get("/{idprocesso}/editar", "ProcessoController@editar")->middleware('auth');
  Route::post("/atualizar", "ProcessoController@atualizar")->middleware('auth');
  Route::get("/{idprocesso}/excluir", "ProcessoController@excluir")->middleware('auth');
});
