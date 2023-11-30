<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\Onda;
use App\Repositories\Interfaces\IOndaRepository;
use App\Validators\OndaRepositoryValidator;

/**
 * Class OndaRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OndaRepositoryEloquent extends BaseRepository implements IOndaRepository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return Onda::class;
    }


}
