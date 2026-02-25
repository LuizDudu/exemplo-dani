<h1>Lista de Tarefas</h1>
<a href="{{ route('home') }}">Voltar</a>
<br>
<a href="{{ route('tarefas.create') }}">Criar Tarefa</a>

<br>

<style>
    table {
        border-collapse: collapse;
    }

    td {
        text-align: center;
    }

    table, th, td {
        border: 1px solid;
    }
</style>

<table style="">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Finalizada</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tarefas as $tarefa)
            <tr>
                <td>{{ $tarefa->nome }}</td>
                <td>{{ $tarefa->descricao }}</td>
                <td>{{ $tarefa->finalizada === true ? 'Sim' : 'Não' }}</td>
                <td>
                    <a href="{{ route('tarefas.edit', $tarefa->id) }}">Editar</a>
                    <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" value="Excluir">
                            Excluir
                        </button>
                    </form>
                    <form method="POST" action="{{ route('tarefas.finalizar', [$tarefa->id]) }}">
                        @csrf
                        <button type="submit">Finalizar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>