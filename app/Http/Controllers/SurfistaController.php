<?php

namespace App\Http\Controllers;

use App\Exceptions\SurfistaNotFoundException;
use App\Http\Resources\SurfistaResource;
use App\Repositories\Interfaces\ISurfistaRepository;
use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        $surfista = $this->surfistaRepository->create($request->all());
        return new SurfistaResource($surfista);
    }
    public function index(): ResourceCollection
    {
        $surfistas = $this->surfistaRepository->all();
        return SurfistaResource::collection($surfistas);
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdatesurfistaRequest $request, int $id, int $surfistaId)
    // {
    //     $surfista = $this->surfistaRepository
    //         ->where('user_id', $id)
    //         ->find($surfistaId);

    //     throw_unless($surfista, surfistaNotFoundException::class);

    //     $surfista = $this->surfistaRepository->update($request->all(), $surfistaId);

    //     return new surfistaResource($surfista);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(int $id, int $surfistaId)
    // {
    //     $surfista = $this->surfistaRepository
    //         ->where('user_id', $id)
    //         ->find($surfistaId);

    //     throw_unless($surfista, surfistaNotFoundException::class);

    //     $this->surfistaRepository->delete($surfistaId);

    //     return response()->json(status: Response::HTTP_NO_CONTENT);
    // }
}
