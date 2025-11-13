<div class="form-group">

    <label for="nombre">Nombre:</label>

    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ isset($alumno->nombre)?$alumno->nombre:old('nombre') }}" >

    <label for="PrimerApellido">Primer Apellido:</label>
    <input type="text" class="form-control" name="PrimerApellido" id="PrimerApellido" value="{{ isset($alumno->PrimerApellido)?$alumno->PrimerApellido:old('PrimerApellido') }}" >

    <label for="SegundoApellido">Segundo Apellido:</label>
    <input type="text" class="form-control" name="SegundoApellido" id="SegundoApellido" value="{{ isset($alumno->SegundoApellido)?$alumno->SegundoApellido:old('SegundoApellido') }}" >

    <label for="Escuela">Escuela:</label>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown button
        </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($escuelas as $escuela)
                <a class="dropdown-item" id="">{{ $escuela->nombre }}</a>
                @endforeach
        </div>
    </div>
</div>
<label for="Escuela">Escuela:</label>
    <select class="form-control" name="Escuela" id="Escuela">
        @foreach ($escuelas as $escuela)
            <option value="{{ $escuela->id }}" 
                @if (isset($alumno->Escuela) && $alumno->Escuela == $escuela->id)
                    selected
                @endif
            >
                {{ $escuela->nombre }}
            </option>
        @endforeach
    </select>

<input type="submit" value="Guardar Datos" class="btn btn-success">
<a href="{{ url('alumnos') }}" class="btn btn-primary">Regresar</a>