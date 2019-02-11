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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cursos', 'CursosController')->middleware('auth');
Route::resource('alunos', 'AlunosController')->middleware('auth');
Route::resource('turmas', 'TurmasController')->middleware('auth');
Route::resource('agenda', 'AgendaController')->middleware('auth');
Route::resource('membros', 'MembrosController')->middleware('auth');
Route::resource('tiposevento', 'TiposEventoController')->middleware('auth');



