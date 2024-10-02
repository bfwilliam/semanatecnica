
    <h1>Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}">
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $usuario->email }}">
        
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="{{ $usuario->fecha_nacimiento }}">
        
        <button type="submit">Actualizar</button>
    </form>
