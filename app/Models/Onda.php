<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onda extends Model
{
    use HasFactory;

    protected $table = 'onda';
    public $timestamps = false;

    public $fillable = [
        'bateria_id',
        'surfista_id',
    ];
}
