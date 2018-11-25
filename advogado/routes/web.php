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

Route::get('/', function () {
  return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(["prefix" => "clientes"], function () {
  Route::get("/", "ClienteController@index");
  Route::get("/novo", "ClienteController@novo");
  Route::post("/gravar", "ClienteController@gravar");
  Route::get("/{idcliente}/editar", "ClienteController@editar");
  Route::post("/atualizar", "ClienteController@atualizar");
  Route::get("/{idcliente}/excluir", "ClienteController@excluir");
});

Route::group(["prefix" => "tipoprocessos"], function () {
  Route::get("/", "TipoProcessoController@index");
  Route::get("/novo", "TipoProcessoController@novo");
  Route::post("/gravar", "TipoProcessoController@gravar");
  Route::get("/{idtipoprocesso}/editar", "TipoProcessoController@editar");
  Route::post("/atualizar", "TipoProcessoController@atualizar");
  Route::get("/{idtipoprocesso}/excluir", "TipoProcessoController@excluir");
});

Route::group(["prefix" => "processos"], function () {
  Route::get("/", "ProcessoController@index");
  Route::get("/novo", "ProcessoController@novo");
  Route::post("/gravar", "ProcessoController@gravar");
  Route::get("/{idprocesso}/editar", "ProcessoController@editar");
  Route::post("/atualizar", "ProcessoController@atualizar");
  Route::get("/{idprocesso}/excluir", "ProcessoController@excluir");
});
