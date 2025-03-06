<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;

    protected $guarded = [];
    public function guru ()
    {
        return $this->belongsTo(teacher::class, 'guru_id');	
    }

    public function homeRoom()
    {
        return $this->hasMany(homeRoom::class);
    }

}
