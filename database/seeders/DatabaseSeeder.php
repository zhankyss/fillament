<?php

namespace Database\Seeders;

use App\Models\homeRoom;
use App\Models\Kelas;
use App\Models\Periode;
use App\Models\teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'masDanz',
            'email' => 'mas@gmail.com',
            'password' => '659118'
        ]);
        teacher::factory(2)->create();
        Periode::factory(2)->create();
        Kelas::factory(2)->create();
        homeRoom::factory(2)->create();
    }
}
