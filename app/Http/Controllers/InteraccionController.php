<?php

namespace App\Http\Controllers;

use App\Http\Requests\V1\InteraccionRequest;
use App\Repositories\InteraccionRepository;
use Illuminate\Http\Request;

class InteraccionController extends Controller
{
    protected InteraccionRepository $repo;

    public function __construct(InteraccionRepository $repo)
    {
        $this->repo = $repo;
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

}
