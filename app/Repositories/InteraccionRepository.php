<?php

namespace App\Repositories;

use App\Models\Interaccion;
use App\Models\Perro;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class InteraccionRepository
{

    public function getInteracciones()
    {
        $interaccion= Interaccion::all();
        return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);
    }

    public function getAceptados()
    {
        $interaccion = Interaccion::where("preferencia", '=', "Aceptado")->get();
        return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);
    }

    public function getRechazado()
    {
        $interaccion = Interaccion::where("preferencia", '=', "Rechazado")->get();
        return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);
    }

    public function getCandidato()
    {
        //$interaccion = Perro::inRandomOrder()->first();
        //$interaccion->id;
        /*$estado = $this -> ValidarCandidato($interaccion);

        if($estado = 1){
            return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);
        }else{

        }
        
        $perro = Perro::all()->random(1);
        $interaccion = Interaccion::with(['perro' => function ($q) use ($perro) {
            $q->where('id','=',5);
        }])->get();

        return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);*/


    }


    public function getInteraccion($request)
    {
        $interaccion= interaccion::where('id', $request->id)->get();
        return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);
    }

    public function createInteraccion($request)
    {
        try {
            $interaccion= Interaccion::create([
                "perr_interesado" => $request->perr_interesado,
                "perr_candidato" => $request->perr_candidato,
                "preferencia" => $request->preferencia
            ]);
            return response()->json(["interaccion"=>$interaccion], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e], Response::HTTP_BAD_REQUEST);
        }
    }



}

