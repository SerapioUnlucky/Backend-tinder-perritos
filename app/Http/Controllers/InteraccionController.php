<?php

namespace App\Http\Controllers;

use App\Http\Requests\V1\InteraccionRequest;
use App\Http\Requests\V1\PreferenciaRequest;
use App\Repositories\InteraccionRepository;
use Illuminate\Http\Request;

class InteraccionController extends Controller
{
    protected InteraccionRepository $repo;

    public function __construct(InteraccionRepository $repo)
    {
        $this->repo = $repo;
    }

    public function putPreferencia(PreferenciaRequest $request)
    {
        return $this->repo->putPreferencia($request);
    }

    public function getInteracciones()
    {
        return $this->repo->getInteracciones();
    }

    public function getInteraccion(Request $request)
    {
        return $this->repo->getInteraccion($request);
    }

    public function createInteraccion(InteraccionRequest $request)
    {
        return $this->repo->createInteraccion($request);
    }

    public function getAceptados()
    {
        return $this->repo->getAceptados();
    }

    public function getCandidato()
    {
        return $this->repo->getCandidato();
    }

    public function getRechazado()
    {
        return $this->repo->getRechazado();
    }
}
