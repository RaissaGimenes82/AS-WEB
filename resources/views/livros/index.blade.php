@can('create', App\Models\Livro::class)

    @foreach($livros as $livro)
        <div>
            <h3>{{ $livro->titulo }}</h3>
            <p>{{ $livro->autor }}</p>
            <p>{{ $livro->ano }}</p>
            <a href="{{ url('livros/'.$livro->id.'/edit') }}">Edit</a>
            <form action="{{ url('livros/'.$livro->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endcan