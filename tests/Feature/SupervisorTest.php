<?php

namespace Tests\Feature;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
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

            "prev_project_id" => 1,
            "state_id" => 6,
            "supervisors" => [
                [
                    "supervisor_id" => 2,
                    "role_ids" => [2, 3]
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
            "token" => 2
        ]);


        $this->assertEquals($createdProject['title'], 'Пример названия');
        dd($createdProject['supervisors']);
        $this->assertEquals($createdProject['supervisors'], 'Пример названия');
    }

    /** @test */
    public function edit_project_with_harvesting()
    {
        $this->assertTrue(true);
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
