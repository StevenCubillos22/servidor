<?php

namespace App\Http\Controllers;

use App\Http\Resources\EtiquetaResource;
use App\Http\Requests\EtiquetaRequest;

use App\Models\Etiqueta;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etiq=Etiqueta::all();
        return EtiquetaResource::collection($etiq);
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
    public function store(EtiquetaRequest $request)
    {
        $etiq = new Etiqueta();
        $etiq->nombre = $request->nombre;
        $etiq->save();

        return new EtiquetaResource($etiq);
    }

    /**
     * Display the specified resource.
     */
    public function show($id):JsonResource
    {
        $etiq = Etiqueta::find($id);
        return new EtiquetaResource($etiq);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etiqueta $etiqueta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id):JsonResource
    {
        $etiq = Etiqueta::find($id);
        $etiq->nombre = $request->nombre;
        $etiq->save();

        return new EtiquetaResource($etiq);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();
        return response()->json(['success' => true], 200);
    }
}
