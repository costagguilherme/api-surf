<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotaRequest;
use App\Http\Resources\NotaResource;
use App\Repositories\Interfaces\INotaRepository;

class NotaController extends Controller
{
    public function __construct(
        private INotaRepository $notaRepository
    ) {
    }


    public function store(StoreNotaRequest $request)
    {
        $nota = $this->notaRepository->create($request->all());
        return new NotaResource($nota);
    }
}
