<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homeRoom extends Model
{
    /** @use HasFactory<\Database\Factories\HomeRoomFactory> */
    use HasFactory;

    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id');
    }

    public function periode()
    {
        return $this->belongsTo(periode::class, 'periode_id');
    }

    public function teacher()
    {
        return $this->belongsTo(teacher::class, 'teacher_id');
    }
}
