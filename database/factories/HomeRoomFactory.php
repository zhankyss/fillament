<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\Periode;
use App\Models\teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\homeRoom>
 */
class HomeRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kelas_id' => Kelas::all()->random()->id,
            'periode_id' => Periode::all()->random()->id,
            'teacher_id' => teacher::all()->random()->id
        ];
    }
}
