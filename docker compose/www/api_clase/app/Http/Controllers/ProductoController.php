<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\productoResource;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResource
    {
        $producto = Producto::all(); // variable que obtiene todos los prod de la tabla

        //return response()->json($productos,200);//
        return ProductoResource::collection($producto);
    }

    /**
     * Show the form for creating a new resource.
     
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request):JsonResource
    {        
        //
        //$categorias = $request->categorias;
        //$params = $request->all();
        //unset($params["categorias"]);
        //$producto=Producto::create($params);
        $producto=new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->save();

        $producto->categorias()->attach($categorias)
        return response()->json($producto,201);


    }

    /**
     * Display the specified resource.
     */
    public function show($id):JsonResource
    {
        //
        $producto = Producto::find($id);

        //return response()->json($producto,200);
        return new ProductoResource($producto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*
    public function edit(Producto $producto)
    {       
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductoRequest $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        
        $producto->save();

        //return response()->json($producto,200);
        $producto->categorias()->attach($request->categorias);
        $producto->save();
        return new ProductoResource($producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        Producto::find($id)->delete();

        return response()->json(['success' => true],200);
    }
}
