<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Atribut yang diizinkan untuk diisi
    protected $fillable = [
        'name',
        'is_done',
    ];

}
