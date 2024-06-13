<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipoRequest;
use App\Http\Resources\EquipoResource;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::all();
        return response()->json($equipos);
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
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->descripcion = $request->descripcion;


        $equipo->save();

        return new EquipoResource($equipo);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);
        return new EquipoResource($equipo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $equipo = Equipo::find($id);
        $equipo->nombre = $request->nombre;

        $equipo->save();

        return new EquipoResource($equipo);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        $equipo = Equipo::find($id);
        if (!$equipo) {
            return response()->json(['message' => 'Equipo no encontrado :( '], 404);
        }
        $equipo->delete();
        return response()->json(['message' => 'Equipo eliminado']);
    }
}
