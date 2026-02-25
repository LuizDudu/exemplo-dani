<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;

class FinalizarTarefaController extends Controller
{
    public function __invoke(Tarefa $tarefa)
    {
        $tarefa->finalizada = true;
        $tarefa->saveOrFail();

        return redirect()->route('tarefas.index');
    }
}
