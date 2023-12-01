<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surfista extends Model
{
    use HasFactory;

    protected $table = 'surfista';
    public $timestamps = false;

    public $fillable = [
        'nome',
        'pais',
    ];
}
