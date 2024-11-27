<form action="{{ url('livros') }}" method="POST">
    @csrf
    <input type="text" name="titulo" placeholder="Titulo" required>
    <input type="text" name="autor" placeholder="Autor" required>
    <input type="text" name="ano" placeholder="Ano" required>
    <input type="text" name="genero" placeholder="Genero" required>
    <button type="submit">Create Livro</button>
</form>