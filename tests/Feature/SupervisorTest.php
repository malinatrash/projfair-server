<?php

namespace Tests\Feature;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\ProjectSupervisorRoleEnum;
use App\Models\Supervisor;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class SupervisorTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function create_project_with_harvesting()
    {
        $supervisorCreator = Supervisor::factory()->create([
            'api_token' => 'token_example'
        ]);

        $supervisorParticipant = Supervisor::factory()->create();
        $createdProject = $this->post('api/supervisor/projects', [
            "title" => "Пример названия",
            "places" => 24,
            "goal" => "string",
            "description" => "string",
            "difficulty" => 0,
            "date_start" => "2022-11-27",
            "date_end" => "2022-11-27",
            "requirements" => "string",
            "customer" => "string",
            "product_result" => "string",
            "study_result" => "string",
            "additional_inf" => "string",
            "type_id" => 1,
            "department_id" => 10,
            "state_id" => 6,
            "supervisors" => [
                [
                    "supervisor_id" => $supervisorParticipant->id,
                    "role_ids" => [ProjectSupervisorRoleEnum::coSupervisor->value]
                ],
                [
                    "supervisor_id" => $supervisorCreator->id,
                    "role_ids" => [ProjectSupervisorRoleEnum::supervisor->value]
                ]
            ],
            "skill_ids" => [
                1
            ],
            "new_skills" => [
                "TETS1",
                "TEST2"
            ],
            "specialities" => [
                [
                    "specialitiy_id" => 1,
                    "course" => 2,
                    "priority" => 1
                ]
            ]

        ], [
            "token" => $supervisorCreator->api_token
        ]);

        $this->assertEquals($createdProject['title'], 'Пример названия');

        $supervisorsOnProject = $createdProject['supervisors'];

        $supervisorCreatorRoles = [ProjectSupervisorRoleEnum::supervisor->value, ProjectSupervisorRoleEnum::creator->value];
        $supervisorIds = [$supervisorCreator->id, $supervisorParticipant->id];

        $this->assertEquals(2, count($createdProject['supervisors']));

        foreach ($supervisorsOnProject as $supervisorRolesOnProject) {
            $supervisorOnProjectId = $supervisorRolesOnProject['supervisor']['id'];

            $this->assertContains($supervisorOnProjectId, $supervisorIds);
            $roles = $supervisorRolesOnProject['roles'];

            if ($supervisorOnProjectId == $supervisorCreator->id) {
                $this->assertEquals(2, count($roles), 'Неправильное количество ролей у создателя-преподавателя проекта');
                foreach ($roles as $role) {
                    $this->assertContains($role['id'], $supervisorCreatorRoles);
                }
            } else {
                $this->assertEquals(1, count($roles));
                foreach ($roles as $role) {
                    $this->assertContains($role['id'], [ProjectSupervisorRoleEnum::coSupervisor->value]);
                }
            }
        }
    }

    /** @test */
    public function edit_project_with_harvesting()
    {

        $supervisorCreator = Supervisor::factory()->create([
            'api_token' => 'token_example'
        ]);
        $project = Project::factory()->create();

        $editedProject = $this->patch('api/supervisor/projects/' . $project->id, [
            "title" => $project["title"] .  "Измененное названия",
        ], [
            "token" => $supervisorCreator->api_token
        ]);
        $editedProject->assertStatus(200);
        $this->assertEquals($project["title"]  .  "Измененное названия", $editedProject['title']);
        $this->assertEquals($project["places"], $editedProject['places']);
    }

    /** @test */
    public function can_not_create_project_wihout_harvesting()
    {
        $this->assertTrue(true);
    }
    /** @test */
    public function can_not_edit_project_wihout_harvesting()
    {
        $this->assertTrue(true);
    }
}
