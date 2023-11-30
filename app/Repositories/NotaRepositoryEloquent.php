<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\Nota;
use App\Repositories\Interfaces\INotaRepository;

/**
 * Class NotaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class NotaRepositoryEloquent extends BaseRepository implements INotaRepository
{
    /**
     * Specify Model class name
     */
    public function model(): string
    {
        return Nota::class;
    }


}
