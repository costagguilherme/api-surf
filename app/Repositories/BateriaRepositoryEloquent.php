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
}
