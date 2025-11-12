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
        $escuelas = Escuela::all();
        return view('escuelas.index');
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
        Escuela::create($request->all());
        return redirect()->route('escuelas.index');
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
        return view('escuelas.edit', compact('escuela'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Escuela $escuela)
    {
        //
        $escuela->update($request->all());
        return redirect()->route('escuelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Escuela $escuela)
    {
        //
        $escuela->delete();
        return redirect()->route('escuelas.index');
    }
}
