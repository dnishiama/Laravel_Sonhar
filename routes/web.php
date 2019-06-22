<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Rotas para a tabela de voluntario*/
Route::get('/voluntarios', 'VoluntarioController@index')->name('voluntarios.index');
Route::get('/voluntarios/create', 'VoluntarioController@create')->name('voluntarios.create');
Route::post('/voluntarios', 'VoluntarioController@store')->name('voluntarios.store');
Route::get('/voluntarios/show', 'VoluntarioController@show')->name('voluntarios.show');
Route::get('/voluntarios/{id}/edit', 'VoluntarioController@edit')->name('voluntarios.edit');
Route::put('/voluntarios/{id}', 'VoluntarioController@update')->name('voluntarios.update');
Route::delete('/voluntarios/{id}/delete', 'VoluntarioController@destroy')->name('voluntarios.destroy');

/*Rotas para a tabela de crianca*/
Route::get('/criancas', 'CriancaController@index')->name('criancas.index');
Route::get('/criancas/create', 'CriancaController@create')->name('criancas.create');
Route::post('/criancas', 'CriancaController@store')->name('criancas.store');
Route::get('/criancas/show', 'CriancaController@show')->name('criancas.show');
Route::get('/criancas/{id}/edit', 'CriancaController@edit')->name('criancas.edit');
Route::put('/criancas/{id}', 'CriancaController@update')->name('criancas.update');
Route::delete('/criancas/{id}/delete', 'CriancaController@destroy')->name('criancas.destroy');

/*Rotas para a tabela de atividades*/
Route::get('/atividades', 'AtividadeController@index')->name('atividades.index');
Route::get('/atividades/create', 'AtividadeController@create')->name('atividades.create');
Route::post('/atividades', 'AtividadeController@store')->name('atividades.store');
Route::get('/atividades/show', 'AtividadeController@show')->name('atividades.show');
Route::get('/atividades/{id}/edit', 'AtividadeController@edit')->name('atividades.edit');
Route::put('/atividades/{id}', 'AtividadeController@update')->name('atividades.update');
Route::delete('/atividades/{id}/delete', 'AtividadeController@destroy')->name('atividades.destroy');

/*Rotas para a tabela de funcoes*/
Route::get('/funcoes', 'FuncaoController@index')->name('funcoes.index');
Route::get('/funcoes/create', 'FuncaoController@create')->name('funcoes.create');
Route::post('/funcoes', 'FuncaoController@store')->name('funcoes.store');
Route::get('/funcoes/show', 'FuncaoController@show')->name('funcoes.show');
Route::get('/funcoes/{id}/edit', 'FuncaoController@edit')->name('funcoes.edit');
Route::put('/funcoes/{id}', 'FuncaoController@update')->name('funcoes.update');
Route::delete('/funcoes/{id}/delete', 'FuncaoController@destroy')->name('funcoes.destroy');

/*Rotas para a tabela de historicos*/
Route::get('/historicos', 'HistoricoController@index')->name('historicos.index');
Route::get('/historicos/create', 'HistoricoController@create')->name('historicos.create');
Route::post('/historicos', 'HistoricoController@store')->name('historicos.store');
Route::get('/historicos/show', 'HistoricoController@show')->name('historicos.show');
Route::get('/historicos/{id}/edit', 'HistoricoController@edit')->name('historicos.edit');
Route::put('/historicos/{id}', 'HistoricoController@update')->name('historicos.update');
Route::delete('/historicos/{id}/delete', 'HistoricoController@destroy')->name('historicos.destroy');

/*Rotas para a tabela de inscricoes*/
Route::get('/inscricoes', 'InscricaoController@index')->name('inscricoes.index');
Route::get('/inscricoes/create', 'InscricaoController@create')->name('inscricoes.create');
Route::post('/inscricoes', 'InscricaoController@store')->name('inscricoes.store');
Route::get('/inscricoes/show', 'InscricaoController@show')->name('inscricoes.show');
Route::get('/inscricoes/{id}/edit', 'InscricaoController@edit')->name('inscricoes.edit');
Route::put('/inscricoes/{id}', 'InscricaoController@update')->name('inscricoes.update');
Route::delete('/inscricoes/{id}/delete', 'InscricaoController@destroy')->name('inscricoes.destroy');

/*Rotas para a tabela de instituicoes*/
Route::get('/instituicoes', 'InstituicaoController@index')->name('instituicoes.index');
Route::get('/instituicoes/create', 'InstituicaoController@create')->name('instituicoes.create');
Route::post('/instituicoes', 'InstituicaoController@store')->name('instituicoes.store');
Route::get('/instituicoes/show', 'InstituicaoController@show')->name('instituicoes.show');
Route::get('/instituicoes/{id}/edit', 'InstituicaoController@edit')->name('instituicoes.edit');
Route::put('/instituicoes/{id}', 'InstituicaoController@update')->name('instituicoes.update');
Route::delete('/instituicoes/{id}/delete', 'InstituicaoController@destroy')->name('instituicoes.destroy');