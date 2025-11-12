<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Escuela:</label>
    <select name="escuela_id" required>
        @foreach($escuelas as $escuela)
            <option value="{{ $escuela->id }}">{{ $escuela->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Guardar</button>
</form>
