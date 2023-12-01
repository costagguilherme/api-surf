<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Onda extends Model
{
    use HasFactory;

    protected $table = 'onda';
    public $timestamps = false;

    public $fillable = [
        'bateria_id',
        'surfista_id',
    ];

    public function bateria(): HasOne
    {
        return $this->hasOne(Bateria::class);
    }

    public function surfista(): HasOne
    {
        return $this->hasOne(Surfista::class);
    }

    public function nota(): HasOne
    {
        return $this->hasOne(Nota::class);
    }

}
