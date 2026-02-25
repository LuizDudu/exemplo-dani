<form method="POST" action="{{ route('tarefas.store') }}">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" required>
    <br>

    <label for="descricao">Descrição</label>
    <input type="text" name="descricao">
    <br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('tarefas.index') }}">Voltar</a>