<?php

namespace Database\Factories;

use App\Models\State;
use App\Models\Supervisor;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'places' => $this->faker->randomDigit,
            'goal' => $this->faker->word,
            'idea' => $this->faker->sentence(),
            'difficulty' => $this->faker->randomDigit,
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
            'requirements' => $this->faker->sentence(),
            'customer' => $this->faker->name,
            'expected_result' => $this->faker->sentence(),
            'additional_inf' => $this->faker->sentence(),
            'result' => $this->faker->sentence(),

            'state_id' => State::get()->random()->id,
            'supervisor_id' => Supervisor::get()->random()->id,
            'type_id' => Type::get()->random()->id,
        ];
    }
}
