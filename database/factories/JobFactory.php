<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'job'         => $this->faker->sentence(),
            'location'      => $this->faker->city(),
            'benefits'          => '401K, Dental, Medical',
            'salary'       => $this->faker->numberBetween(0, 225999),
            'company'       => $this->faker->company(),
            'website'       => $this->faker->url(),
            'description'   => $this->faker->paragraph(5)
        ];
    }
}
