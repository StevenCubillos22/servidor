<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActividadNocturnaResource;
use App\Http\Requests\ActividadNocturnaRequest;
use App\Models\ActividadNocturna;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class ActividadNocturnaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actividades = ActividadNocturna::all();    //ActividadNocturna
        return response()->json($actividades, 200); //Se deberia llamar a los objetos json, ya que en el frontend las actividades los tengo en ese formato
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActividadNocturnaRequest $request):JsonResource
    {
        //
        $actividad = new ActividadNocturna();   //ActividadNocturna
        $actividad ->titulo = $request->titulo;
        $actividad->precio = $request->precio;
        $actividad->ubicacion = $request->ubicacion;
        $actividad->save();

        $actividad->equipos()->attach($request->equipo);
        return new ActividadNocturnaResource($actividad);

    }

    /**
     * Display the specified resource.
     */
    public function show($id):JsonResource
    {
        $actividad = ActividadNocturna::find($id);
        return new ActividadNocturnaResource($actividad);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActividadNocturna $actividad_nocturna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $actividad = ActividadNocturna::find($id);  //ActividadNocturna
        $actividad ->titulo = $request->titulo;
        $actividad->precio = $request->precio;
        $actividad->ubicacion = $request->ubicacion;

        $actividad->equipos()->attach($request->equipos);
        $actividad->save();

        return new ActividadNocturnaResource($actividad);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $actividad = ActividadNocturna::find($id); //ActividadNocturna
        if (!$actividad) {
            return response()->json(['message' => 'Actividad no encontrada'], 404);
        }
        $actividad->delete();
        return response()->json(['message' => 'Actividad eliminada']);
    }
}
