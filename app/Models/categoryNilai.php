<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryNilai extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryNilaiFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];
}
