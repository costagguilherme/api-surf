<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBateriaRequest;
use App\Http\Resources\BateriaResource;
use App\Repositories\Interfaces\IBateriaRepository;
use App\Repositories\Interfaces\ISurfistaRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BateriaController extends Controller
{
    public function __construct(
        private IBateriaRepository $bateriaRepository
    ) {
    }

    // public function index(): ResourceCollection
    // {
    //     $baterias = $this->bateriaRepository->all();
    //     return BateriaResource::collection($baterias);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBateriaRequest $request)
    {
        $bateria = $this->bateriaRepository->create($request->all());
        return new BateriaResource($bateria);
    }
}
