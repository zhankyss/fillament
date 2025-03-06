<?php

namespace Database\Factories;

use App\Models\teacher;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kelas' => fake()->name(),
            'guru_id' => teacher::all()->random()->id,
            'is_open' => fake()->boolean(),
        ];
    }
}
