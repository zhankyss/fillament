<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = ['laki-laki', 'perempuan'];
        $religion = ['Islam', 'Budha', 'Hindu', 'Kristen'];

        return [
            'name' => fake()->name(),
            'nis' => fake()->randomNumber(9),
            'gender' => $gender[rand(0, 1)],
           'religion' => $religion[rand(0, 3)],
           'birthday' => fake()->date(),
        ];
    }
}
