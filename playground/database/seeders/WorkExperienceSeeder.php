<?php

namespace Database\Seeders;

use App\Models\WorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // with end date
        WorkExperience::factory()
            ->count(10)
            ->create();

        // without end date
        WorkExperience::factory()
            ->count(10)
            ->current()
            ->create();
    }
}
