<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fct extends Model
{
    use HasFactory;
    protected $fillable = [
        'k_hjn',
        'angin',
        'gel_tg',
        'arus',
        'fctr',
        'arh_angin',
    ];
}
