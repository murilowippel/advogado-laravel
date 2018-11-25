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
});