<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    protected $fillable = ['name', 'nip', 'address', 'profile'];

    public function periode()
    {
        return $this->hasOne(periode::class, 'teacher_id');
    }

    public function kelas()
    {
        return $this->hasMany(kelas::class, 'teacher_id');
    }

    public function classroom()
    {
        return $this->hasMany(homeRoom::class, 'teacher_id', 'id');
    }
}
