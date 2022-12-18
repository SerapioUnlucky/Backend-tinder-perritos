<?php

namespace App\Repositories;

use App\Models\Interaccion;
use App\Models\Perro;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class PerroRepository
{
    public function getPerros()
    {
        $perros = Perro::all();
        $interaccion = Interaccion::all();
        return response()->json(["perros"=>$perros, "interaccion"=>$interaccion], Response::HTTP_OK);
    }

    public function createPerro($request)
    {
        $perros = Perro::create([
            "perr_nombre" => $request->perr_nombre,
            "perr_imagen" => $request->perr_imagen,
            "descripcion" => $request->descripcion
        ]);
        return response()->json(["perros"=>$perros], Response::HTTP_OK);
    }

    public function putPerro($request)
    {
        $perros = Perro::findorFail($request->id);
        
        isset($request->nombre) && $perros->perr_nombre = $request->nombre;
        $perros = Perro::where('id', $request->id)
            ->update([
                "perr_nombre" => $request->perr_nombre,
        ]);

        isset($request->imagen) && $perros->perr_imagen = $request->imagen;
        $perros = Perro::where('id', $request->id)
        ->update([
            "perr_imagen" => $request->perr_imagen,
        ]);

        isset($request->descrip) && $perros->descripcion = $request->descrip;
        $perros = Perro::where('id', $request->id)
        ->update([
            "descripcion" => $request->descripcion,
         ]);

         return response()->json(["perros"=>$perros], Response::HTTP_OK);
    }

    public function deletePerro($request)
    {

        $perros = Perro::find($request->id);
        $perros->delete();
        return response()->json(["perros" => $perros], Response::HTTP_OK);

    }
    
}
