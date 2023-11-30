<?php

namespace App\Repositories;

use App\Models\Surfista;
use App\Repositories\Interfaces\ISurfistaRepository;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class SurfistaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SurfistaRepositoryEloquent extends BaseRepository implements ISurfistaRepository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return Surfista::class;
    }
}
