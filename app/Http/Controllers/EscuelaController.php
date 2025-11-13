<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escuela;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $escuelas = Escuela::query()->when(request('sort'), function($query, $sort) {
            $direccion = request('direction');
            return match($sort) {
                'id' => $query->orderBy('id', $direccion),
                'nombre' => $query->orderBy('nombre', $direccion),
                default => $query
            };
        })->paginate(5);
        return view('escuelas.index', compact('escuelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('escuelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Escuela::insert($request->except('_token'));
        return redirect('escuelas/')->with('mensaje', 'Escuela agregada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Escuela $escuela)
    {
        //
        $escuela = Escuela::findOrFail($escuela->id);
        return view('escuelas.edit', compact('escuela'))->with('mensaje', 'Escuela editada exitosamente.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        Escuela::where('id', $id)->update($request->except('_token', '_method'));
        $escuela = Escuela::findOrFail($id);
        return redirect('escuelas/')->with('mensaje', 'Escuela actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $escuela = Escuela::findOrFail($id);
        Escuela::destroy($id);
        return redirect('escuelas/')->with('mensaje', 'Escuela eliminada exitosamente.');
    }
}
