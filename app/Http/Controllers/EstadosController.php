<?php

namespace App\Http\Controllers;
use App\Models\Estados;

use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estados::where('status', 1)
                  ->orderBy('nombre')->get();

        return view('Estados.index')->with('estados', $estados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Estados::create($datos);
        return redirect('/estados');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estado = Estados::find($id);
        return view('Estados.edit')->with('estado', $estado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $estado = Estados::find($id);
        $estado->update($datos);
        return redirect('/estados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estado = Estados::find($id);
        $estado->status = 0;
        $estado->save();
        return redirect('/estados');
    }
}
