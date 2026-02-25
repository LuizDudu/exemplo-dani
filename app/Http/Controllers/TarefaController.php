<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $todasTarefas = Tarefa::all();

        return view('tarefas.index', [
            'tarefas' => $todasTarefas
        ]);
    }

    public function create()
    {
        return view('tarefas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'string'],
            'descricao' => ['nullable', 'string'],
        ]);

        Tarefa::create($request->all());

        return redirect()->route('tarefas.index');
    }

    public function show(Tarefa $tarefa)
    {
        return view('tarefas.show', [
            'tarefa' => $tarefa
        ]);
    }

    public function edit(Tarefa $tarefa)
    {
        return view('tarefas.edit', [
            'tarefa' => $tarefa
        ]);
    }

    public function update(Request $request, Tarefa $tarefa)
    {
        $request->validate([
            'nome' => ['required', 'string'],
            'descricao' => ['nullable', 'string'],
        ]);

        $tarefa->update($request->all());

        return redirect()->route('tarefas.index');
    }

    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();

        return redirect()->route('tarefas.index');
    }
}
