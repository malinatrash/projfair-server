<?php

namespace Database\Factories;

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
            'description' => $this->faker->sentence(),
            'difficulty' => $this->faker->randomDigit,
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
            'requirements' => $this->faker->sentence(),
            'customer' => $this->faker->name,
            'additional_inf' => $this->faker->sentence(),
            'product_result' => $this->faker->sentence(),
            'study_result' => $this->faker->sentence(),

            //'project_review' => $this->faker->sentence(),
            'project_review' => 'Это отзыв о проекте',

            'state_id' => '2',
            //'type_id' => Type::get()->random()->id,
            'type_id' => Type::factory()->create()->id,

        ];
    }
}
