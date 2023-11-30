<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSurfistaRequest;
use App\Http\Resources\SurfistaResource;
use App\Repositories\Interfaces\ISurfistaRepository;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SurfistaController extends Controller
{
    public function __construct(
        private ISurfistaRepository $surfistaRepository
    ) {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSurfistaRequest $request)
    {
        $surfista = $this->surfistaRepository->create($request->all());
        return new SurfistaResource($surfista);
    }
    public function index(): ResourceCollection
    {
        $surfistas = $this->surfistaRepository->all();
        return SurfistaResource::collection($surfistas);
    }

}
