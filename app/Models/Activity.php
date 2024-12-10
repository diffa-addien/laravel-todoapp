<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    // Tambahkan atribut yang diizinkan untuk mass assignment
    protected $fillable = [
        'title',
        'user_id',
    ];
}
