<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\DesarrolladorController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/proyectos', [ProyectoController::class,'index'])->name('proyectos');

//Route::get('/proyectos/insert',[ProyectoController::class,'create'])->name('insertProyectos');
//Route::post('/proyectos/store',[ProyectoController::class,'store'])->name('guardarProyecto');


Route::resource('proyectos',ProyectoController::class);
Route::resource('desarrolladores',DesarrolladorController::class);