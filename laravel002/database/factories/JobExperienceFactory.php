<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'company_name' =>fake()->company(),
            'start_year' => fake()->date(),
            'end_year' => fake()->date(),
            'is_current' => false, //fake()->randomElement([false, true]), //fake()-boolean()
            'position' => fake()->jobTitle()
        ];
    }

    public function current()
    {
        return $this->state(function () {
            return[
                'end_year' => null,
                'is_current' =>true
            ];
        });
    }
}
