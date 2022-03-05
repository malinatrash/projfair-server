<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fio' => $this->faker->name,
            'about' => $this->faker->sentence(),
            'email' => $this->faker->email,
            'numz' => $this->faker->creditCardNumber,
            'phone' => $this->faker->phoneNumber(),
            'course' => $this->faker->randomDigit,
            'training_group' => $this->faker->word,
        ];
    }
}
