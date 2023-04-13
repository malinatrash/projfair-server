<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\Speciality;
use App\Models\State;
use App\Models\StateParticipation;
use App\Models\Supervisor;
use Illuminate\Support\Facades\DB;
use App\Models\Type;
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
        //$skills = Skill::factory(100)->create();
        //$candidates = Candidate::factory(100)->create();
        //Type::factory(20)->create();
        //Supervisor::factory(20)->create();
        //StateParticipation::factory(20)->create();

        // $projects = Project::factory(200)->create();

        // foreach ($projects as $project) {
        //     $skillsIds = $skills->random(10)->pluck('id');
        //      $project->skills()->attach($skillsIds);
        //  }

        //  foreach ($candidates as $candidate) {
        //      $skillsIds = $skills->random(15)->pluck('id');
        //       $candidate->skills()->attach($skillsIds);
        //  }

        //   Participation::factory(100)->create();
    }
}
