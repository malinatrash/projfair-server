<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supervisor>
 */
class SupervisorFactory extends Factory
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
            'email' => $this->faker->email,
            'about' => $this->faker->word,
            'position' => $this->faker->word,
            'api_token' => 'karbushev_gde_adminka',
        ];
    }
}
