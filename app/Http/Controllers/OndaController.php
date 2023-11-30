<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOndaRequest;
use App\Http\Resources\OndaResource;
use App\Repositories\Interfaces\IOndaRepository;
use Illuminate\Http\Request;

class OndaController extends Controller
{
    public function __construct(
        private IOndaRepository $ondaRepository
    ) {
    }


    public function store(StoreOndaRequest $request)
    {
        $onda = $this->ondaRepository->create($request->all());
        return new OndaResource($onda);
    }
}
