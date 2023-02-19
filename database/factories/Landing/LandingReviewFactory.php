<?php

namespace Database\Factories\Landing;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LandingReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'class' => rand(6,11),
            'photo_path' => rand(1,3).'jpg',
            'text' => $this->faker->text(500), 
            'is_published' => rand(0,1), 
            'subject_id' => rand(1,3),
        ];
    }
}
