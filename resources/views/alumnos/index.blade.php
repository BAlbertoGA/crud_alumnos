<table>
    <tr>
        <th>Nombre</th>
        <th>Escuela</th>
    </tr>
    @foreach($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->escuela->nombre }}</td>
        </tr>
    @endforeach
</table>
