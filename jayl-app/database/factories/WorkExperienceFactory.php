<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WorkExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> User::factory(),
            'CompanyName' => fake()->company(),
            'StartDate' => fake()->date(),
            'EndDate' => fake()->date(),
            'is_current' => fake()->boolean(),
             'Position' => fake()->jobTitle()

        ];
    }

    public function current(){
        return $this->state(function (){
            return [
            'EndDate' => null,
            'is_current' => true];
        });
       

    }
}
