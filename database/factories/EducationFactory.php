<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'institute' => $this->faker->sentence,
            'qualification' => $this->faker->sentence,
            'location' => $this->faker->sentence,
            'started_at' => $this->faker->dateTimeThisMonth,
            'ended_at' => $this->faker->dateTimeThisMonth,
            'content' => $this->faker->paragraph,
            //
        ];
    }
}
