<?php

namespace Database\Factories;

use App\Models\Candidate;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participation>
 */
class ParticipationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    /*
    public function definition()
    {
        return [
            'priority' => $this->faker->randomDigit,
           // 'review' => $this->faker->sentence(),
            'project_id' => Project::get()->random()->id,
            'candidate_id' => Candidate::get()->random()->id,
            'state_id' => '1',

            'mark' => $this->faker->numberBetween(0, 5),
            'review' => $this->faker->sentence(),
        ];
    }*/
    public function definition()
    {
        $project = Project::factory()->create();
        $candidate = Candidate::factory()->create();

        return [
            'priority' => $this->faker->randomDigit,
            'review' => $this->faker->sentence(),
            'project_id' => $project->id,
            'candidate_id' => $candidate->id,
            'state_id' => '1',
            'mark' => $this->faker->numberBetween(0, 5),
        ];
    }
}
