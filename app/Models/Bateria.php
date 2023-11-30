<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bateria extends Model
{
    use HasFactory;

    protected $table = 'bateria';
    public $timestamps = false;

    public $fillable = [
        'surfista_1_id',
        'surfista_2_id',
    ];

    public function bank_accounts(): HasMany
    {
        return $this->hasMany(Surfista::class);
    }
}
