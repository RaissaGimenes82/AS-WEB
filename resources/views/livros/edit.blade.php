<form action="{{url('livros/'.$livro->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" placeholder="Titulo" value="{{ $livro->titulo }}" required>
    <input type="text" name="autor" placeholder="Autor" value="{{ $livro->autor }}" required>
    <input type="number" name="ano" placeholder="Ano" value="{{ $livro->ano }}" required>
    <input type="text" name="genero" placeholder="Genero" value="{{ $livro->genero }}" required>
    <button type="submit">Update Livro</button>
</form>