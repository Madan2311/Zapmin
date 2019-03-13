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

// Route::get('/', function () {
//     return view('Clientes.Clientes');
// });
// // Route::get('/Clientes', function () {
// //     return view('Clientes.Clientes');
// // });
// Route::get('/Pedidos', function () {cdm
//     return view('Pedidos.Pedido');
// });
// Route::get('/Color', function () {
//     return view('Color.Color');
// });
// Route::get('/Estilos', function () {
//     return view('Estilos.Estilo');
// });
// Route::get('/Talla', function () {
//     return view('Talla.Talla');
// });
Route::get('/', 'ClientesController@index');
Route::get('/cliente', 'ClientesController@index');
Route::get('/Pedido', 'PedidosController@index');
Route::get('/Color', 'ColorController@index');
Route::get('/Estilo', 'EstiloController@index');
Route::get('/Talla', 'TallaController@index');
Route::get('/AgregarCliente', 'AgregarController@index');
Route::get('/AgregarPedido', 'AgregarController@pedido');
Route::get('/AgregarColor', 'AgregarController@color');
Route::get('/AgregarEstilo', 'AgregarController@estilo');
Route::get('/AgregarTalla', 'AgregarController@talla');
Route::get('/EditarCliente', 'EditarController@index');
Route::get('/EditarPedido', 'EditarController@pedido');
Route::get('/EditarColor', 'EditarController@color');
Route::get('/EditarEstilo', 'EditarController@estilo');
Route::get('/EditarTalla', 'EditarController@talla');