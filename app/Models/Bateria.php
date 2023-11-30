<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bateria extends Model
{
    use HasFactory;

    protected $table = 'bateria';
    public $timestamps = false;

    public $fillable = [
        'surfista_1_id',
        'surfista_2_id',
    ];
}
