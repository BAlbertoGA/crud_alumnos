<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Escuela;


class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::with('escuela')->when(request('sort'), function($query, $sort) {
            $direccion = request('direction');
            return match($sort) {
                'id' => $query->orderBy('id', $direccion),
                'nombre' => $query->orderBy('nombre', $direccion),
                'primerapellido' => $query->orderBy('primerapellido', $direccion),
                'segundoapellido' => $query->orderBy('segundoapellido', $direccion),
                'escuela' => $query->join('escuelas', 'alumnos.escuela_id', '=', 'escuelas.id')
                                   ->orderBy('escuelas.nombre', $direccion)
                                   ->select('alumnos.*'),
                default => $query
            };
        })->paginate(5);
        $alumnos->appends(request()->query());
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        $escuelas = Escuela::all();
        return view('alumnos.create', compact('escuelas'));
    }

    public function store(Request $request)
    {
        Alumno::insert($request->except('_token'));
        return redirect('alumnos/')->with('mensaje', 'Alumno creado exitosamente.');
    }

    public function edit(Alumno $alumno)
    {
        $escuelas = Escuela::all();
        return view('alumnos.edit', compact('alumno', 'escuelas'))->with('mensaje', 'Alumno editado exitosamente.');
    }

    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        return redirect('alumnos/')->with('mensaje', 'Alumno actualizado exitosamente.');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect('alumnos/')->with('mensaje', 'Alumno eliminado exitosamente.');
    }
}

