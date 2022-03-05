<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;
use App\Models\ProjectTag;
use App\Models\Skill;
use App\Models\State;
use App\Models\StateParticipation;
use App\Models\Supervisor;
use App\Models\Tag;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $skills = Skill::factory(10)->create();
        $candidates = Candidate::factory(10)->create();
        Type::factory(2)->create();
        Supervisor::factory(2)->create();
        StateParticipation::factory(2)->create();
        State::factory(2)->create();

        $tags = Tag::factory(5)->create();
        $projects = Project::factory(2)->create();

        foreach ($projects as $project) {
            $tagsIds = $tags->random(3)->pluck('id');
            $project->tags()->attach($tagsIds);
        }

        foreach ($candidates as $candidate) {
            $skillsIds = $skills->random(3)->pluck('id');
            $candidate->skills()->attach($skillsIds);
        }

        Participation::factory(10)->create();
    }
}
