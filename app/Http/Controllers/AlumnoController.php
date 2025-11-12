<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::with('escuela')->get();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        $escuelas = Escuela::all();
        return view('alumnos.create', compact('escuelas'));
    }

    public function store(Request $request)
    {
        Alumno::create($request->all());
        return redirect()->route('alumnos.index');
    }

    public function edit(Alumno $alumno)
    {
        $escuelas = Escuela::all();
        return view('alumnos.edit', compact('alumno', 'escuelas'));
    }

    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        return redirect()->route('alumnos.index');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}

