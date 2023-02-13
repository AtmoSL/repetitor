<?php

namespace Database\Factories\Landing\FeedBack;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Landing\FeedBack\LandingFeedBack>
 */
class LandingFeedBackFactory extends Factory
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
            'class_id'=> rand(1,7),
            'subject_id' => rand(1,3),
            'target_id' => rand(1,2),
            'contacts' => $this->faker->numerify('+7(###)-###-##-##'),
            'format_id' => rand(1,2),
            'status_id'=> rand (1,3),
        ];
    }
}
