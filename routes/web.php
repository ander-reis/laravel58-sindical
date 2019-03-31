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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'HomeController@index')->name('home');

Route::get('/dados-pessoal', 'HomeController@createDadosPessoal')->name('dados-pessoal.get');
Route::post('/dados-pessoal', 'HomeController@postCreateDadosPessoal')->name('dados-pessoal.post');

Route::get('/dados-sindical', 'HomeController@createDadosSindical')->name('dados-sindical.get');
Route::post('/dados-sindical', 'HomeController@postCreateDadosSindical')->name('dados-sindical.post');

Route::get('/dados-termos', 'HomeController@createDadosTermos')->name('dados-termos.get');
Route::post('/dados-termos', 'HomeController@postCreateDadosTermos')->name('dados-termos.post');

Route::post('/cadastrar', 'HomeController@store')->name('cadastrar.store');

//Route::resource('dados-pessoal', 'DadosPessoalController');
//Route::resource('dados-sindical', 'DadosSindicalController');
//Route::resource('termos-de-autorizacao', 'TermosDeAutorizacaoController');
//Route::resource('cadastrar', 'CadastrarController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
