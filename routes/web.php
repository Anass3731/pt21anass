<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\elmeucontrolador;

// Ruta principal (Índice)
Route::get('/', function () {    return view('index');});

// Rutas informativas
Route::get('/nosaltres', function () { return view('nosaltres'); });

Route::get('/onestem', function () { return view('onestem'); });

// Rutas CRUD
//Route::get('/inserir', function () {    return view('inserir');});
Route::get('/inserir',[elmeucontrolador::class, 'f_formulari'])->name('datos_insertar');
Route::post('/inserir',[elmeucontrolador::class, 'f_insert'])->name('datos_insertar');


Route::get('/listar',[elmeucontrolador::class, 'f_listar'])->name('datos_listar');
Route::get('/listar/{fila}',[elmeucontrolador::class, 'f_consultardetalle'])->name('dades_consultar');

Route::get('/modificar', function () {return view('modificar');});

Route::get('/borrar', function () {return view('borrar');});