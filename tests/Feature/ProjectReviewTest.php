<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Project;
use App\Models\Supervisor;
use App\Models\ProjectSupervisorRoleEnum;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectReviewTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function supervisor_can_fill_project_review()
    {
        // Создаем supervisor
        $supervisorCreator = Supervisor::factory()->create([
            'api_token' => 'token_example'
        ]);

        // Создаем проект
        $project = Project::factory()->create();

        $editedProject = $this->patch('api/supervisor/projects/' . $project->id, [            
            'project_review' => 'Это отзыв о проекте',
        ],
        [
            "token" => $supervisorCreator->api_token
        ]);

        $editedProject->assertStatus(200);

        $this->assertEquals('Это отзыв о проекте', $project->project_review);
    }
}