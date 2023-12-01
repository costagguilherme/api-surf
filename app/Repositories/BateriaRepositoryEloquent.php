<?php

namespace App\Repositories;

use App\Models\Bateria;
use App\Repositories\Interfaces\IBateriaRepository;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class BateriaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BateriaRepositoryEloquent extends BaseRepository implements IBateriaRepository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return Bateria::class;
    }

    public function pegarOndasDoSurfistaNaBateria(int $surfista_id, int $bateria_id)
    {
        $ondaRepository = app(OndaRepositoryEloquent::class);
        return $ondaRepository->where('bateria_id', $bateria_id)
            ->where('surfista_id', $surfista_id)
            ->with('nota')->get();
    }
}
