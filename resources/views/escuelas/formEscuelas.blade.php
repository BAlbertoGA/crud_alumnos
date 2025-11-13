<div>
    <label for="nombre">Nombre de la Escuela:</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ isset($escuela->nombre)?$escuela->nombre:old('nombre') }}" >

    <input type="submit" class="btn btn-success" value="{{ $modo }}">   
    <a href="{{url('escuelas/')}}" class="btn btn-primary">Regresar</a>
</div>