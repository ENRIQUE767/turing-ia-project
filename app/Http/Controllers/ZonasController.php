<?php

namespace App\Http\Controllers;

use App\Models\Estados;
use App\Models\Zonas;

use Illuminate\Http\Request;

class ZonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $zonas = Zonas::where('status', 1)
                  ->orderBy('nombre')->get();

        return view('Zonas.index')->with('zonas', $zonas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Consultamos primero tabla foranea para llenar combos
        $estados = Estados::select('id','nombre')
                  ->orderBy('nombre')->get();

        return view('Zonas.create')->with('estados',$estados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Zonas::create($datos);
        return redirect('/zonas');
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
    public function edit(string $id)
    {
        //al editar consultamos todos los campos del registro para precargar el form
        $estado = Estados::find($id);
        //tambien se consulta las tablas de llave foranea para llenar combos y se da por seleccionado
        //por default el valor que tenga la llave foranea en el registro
        $zonas = Zonas::select('id','nombre')
                  ->select('id','nombre')
                  ->orderBy('nombre')->get();

        return view('Zonas.edit')
                  ->with('zonas', $zonas)
                  ->with('estado',$estado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $zona = Zonas::find($id);
        $zona->update($datos);
        return redirect('/zonas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $zona = Zonas::find($id);
        $zona->status = 0;
        $zona->save();
        return redirect('/zonas');
    }
}
