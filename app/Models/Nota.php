<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'nota';
    public $timestamps = false;

    public $fillable = [
        'onda_id',
        'nota_parcial_1',
        'nota_parcial_2',
        'nota_parcial_3',
    ];

    public function onda(): HasOne
    {
        return $this->hasOne(Onda::class);
    }
}
