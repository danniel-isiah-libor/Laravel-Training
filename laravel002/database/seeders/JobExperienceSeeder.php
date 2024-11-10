<?php

namespace Database\Seeders;

use App\Models\JobExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //with end year
        JobExperience::factory()->count(10)->create();
        
        //without end year
        JobExperience::factory()->count(10)->current()->create();
    }
}
