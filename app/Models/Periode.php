<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    /** @use HasFactory<\Database\Factories\PeriodeFactory> */
    use HasFactory;

    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo(teacher::class, 'teacher_id');
    }

    public function homeRoom()
    {
        return $this->hasMany(homeRoom::class);
    }

}
