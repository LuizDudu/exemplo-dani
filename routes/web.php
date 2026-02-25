<?php

use App\Http\Controllers\FinalizarTarefaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::resource('tarefas', TarefaController::class);

Route::post('tarefas/{tarefa}/finalizar', FinalizarTarefaController::class)
    ->name('tarefas.finalizar');
