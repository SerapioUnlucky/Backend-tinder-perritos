<?php

namespace App\Http\Controllers;

use App\Http\Requests\V1\PerroRequest;
use App\Repositories\PerroRepository;
use Illuminate\Http\Request;

class PerroController extends Controller
{

    protected PerroRepository $repo;

    public function __construct(PerroRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getPerros()
    {
        return $this->repo->getPerros();
    }
    
    public function createPerro(PerroRequest $request)
    {
        return $this->repo->createPerro($request);
    }

    public function putPerro(PerroRequest $request)
    {
        return $this->repo->putPerro($request);
    }

    public function deletePerro(Request $request)
    {
        return $this->repo->deletePerro($request);
    }
}
