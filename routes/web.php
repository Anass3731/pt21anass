<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\elmeucontrolador;

// Ruta principal (Índice)
Route::get('/', function () {    return view('index');});

// Rutas informativas
Route::get('/nosaltres', function () { return view('nosaltres'); });

Route::get('/dondeestamos', function () { return view('dondeestamos'); });

// Rutas CRUD
//Route::get('/inserir', function () {    return view('inserir');});
Route::get('/inserir',[elmeucontrolador::class, 'f_formulari'])->name('datos_insertar');
Route::post('/inserir',[elmeucontrolador::class, 'f_insert'])->name('datos_insertar');


Route::get('/listar',[elmeucontrolador::class, 'f_listar'])->name('dades_consultar');
Route::get('/listar/{fila}',[elmeucontrolador::class, 'f_consultardetalle'])->name('dades_consultar');

Route::get('/buscar', [elmeucontrolador::class, 'f_formulari_buscar'])->name('datos_buscar');
Route::post('/buscar', [elmeucontrolador::class, 'f_buscar'])->name('datos_buscar');


Route::get('/modificar', function () {return view('modificar');});

Route::get('/borrar', [elmeucontrolador::class, 'f_borrar'])->name('datos_borrar');
Route::delete('/borrar/{fila}',[elmeucontrolador::class, 'f_borrarfila'])->name('datos_borrarfila');

Route::get('/modificar', [elmeucontrolador::class, 'f_modificar'])->name('datos_modificar');
Route::get('/modificar/{fila}',[elmeucontrolador::class, 'f_modificarfila'])->name('datos_modificarfila');
Route::patch('/modificar/{fila}',[elmeucontrolador::class, 'f_actualimodificarfila'])->name('datos_actualimodificarfila');

