<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            $query = $request->buscar;
            $proyectos = Proyecto::where('nombre','LIKE','%'.$query.'%')
                                    ->orderBy('nombre','asc')
                                    ->get();
            return view('proyectos.index',compact('proyectos','query'));
        }
        //Consulta de todos los proyectos ordenados por nombre ascendente
        $proyectos = Proyecto::orderBy('nombre', 'asc')->get();
        //enviar a la vista
        return view('proyectos.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proyectos.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        //validar los datos
        $request->validate([
            'nombre' => 'required',
            'duracion' => 'required',
        ]);

        //Almacenar el proyecto en la DB
        Proyecto::create($request->all());

        //Redirigir el index
        return redirect()->route('proyectos.index')->with('exito', 'Se ha guardado el proyecto exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //consulta
        $proyecto = Proyecto::FindOrFail($id); //encuentra o lance un error
        //Enviar a la vista
        return view('proyectos.view', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //consulta
        $proyecto = Proyecto::FindOrFail($id);
        //Enviar a la vista
        return view('proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validar los datos
        $request->validate([
            'nombre' => 'required',
            'duracion' => 'required',
        ]);

        //Buscar el proyecto
        $proyecto = Proyecto::FindOrFail($id);

        //Actualizacion del proyecto
        $proyecto->update($request->all());

        //Redirigir el index
        return redirect()->route('proyectos.index')->with('exito', 'Se ha guardado el proyecto exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}