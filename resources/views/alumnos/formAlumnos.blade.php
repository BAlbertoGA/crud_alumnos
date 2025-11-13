<div class="form-group">

    <label for="nombre">Nombre:</label>

    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ isset($alumno->nombre)?$alumno->nombre:old('nombre') }}" >

    <label for="PrimerApellido">Primer Apellido:</label>
    <input type="text" class="form-control" name="PrimerApellido" id="PrimerApellido" value="{{ isset($alumno->primerapellido)?$alumno->primerapellido:old('primerapellido') }}" >

    <label for="SegundoApellido">Segundo Apellido:</label>
    <input type="text" class="form-control" name="SegundoApellido" id="SegundoApellido" value="{{ isset($alumno->segundoapellido)?$alumno->segundoapellido:old('segundoapellido') }}" >

    <label for="Escuela">Escuela:</label>
    <div class="form-group">
        <select class="form-control" name="escuela_id" id="Escuela">
            @foreach ($escuelas as $escuela)
                <option value="{{ $escuela->id }}" 
                    @if (isset($alumno->escuela_id) && $alumno->escuela_id == $escuela->id)
                        selected
                    @endif
                >
                    {{ $escuela->nombre }}
                </option>
            @endforeach
        </select>
    </div>
</div>
<input type="submit" value="{{ $modo }}" class="btn btn-success">
<a href="{{ url('alumnos/') }}" class="btn btn-primary">Regresar</a>