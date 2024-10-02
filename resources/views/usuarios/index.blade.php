
    <h1>Listado de Usuarios</h1>
    <a href="{{ route('usuarios.create') }}">Crear nuevo usuario</a>

    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario->nombre }} - {{ $usuario->email }}
                <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

