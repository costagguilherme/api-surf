<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBateriaRequest;
use App\Http\Resources\BateriaResource;
use App\Http\Resources\SurfistaResource;
use App\Repositories\Interfaces\IBateriaRepository;
use App\Repositories\Interfaces\ISurfistaRepository;
use App\UseCases\pegarVencedorBateriaUseCase;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BateriaController extends Controller
{
    public function __construct(
        private IBateriaRepository $bateriaRepository
    ) {
    }

    public function winner(int $id): ResourceCollection
    {
        $useCase = app(pegarVencedorBateriaUseCase::class);
        $surfista = $useCase->execute($id);
        return SurfistaResource::collection($surfista);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBateriaRequest $request)
    {
        $bateria = $this->bateriaRepository->create($request->all());
        return new BateriaResource($bateria);
    }
}
