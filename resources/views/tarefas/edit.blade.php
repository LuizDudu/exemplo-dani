<form method="POST" action="{{ route('tarefas.update', $tarefa->id) }}">
    @csrf
    @method('PUT')

    <label for="nome">Nome</label>
    <input type="text" name="nome" required value="{{ $tarefa->nome }}">
    <br>

    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" value="{{ $tarefa->descricao }}">
    <br>

    <button type="submit">Atualizar</button>
</form>

<a href="{{ route('tarefas.index') }}">Voltar</a>
