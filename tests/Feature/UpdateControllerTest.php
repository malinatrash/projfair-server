<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\Supervisor\Projects\IndexController;
use Tests\TestCase;
use App\Models\Supervisor;
use App\Models\Project;

class UpdateControllerTest extends TestCase
{
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_the_controller_with_patch_method()
    {
        $response = $this->patch('/projects/{project}');
        $response->assertStatus(200);
    }

    public function test_supervisor_can_update_project()
    {
        
        $project = Project::factory()->create();        
        
        $data = [
            'mark' => '5',            
        ];
        
        $response = $this->patch("/projects/{$project->id}", $data);        
        $response->assertStatus(200);      
    }

     /*

    public function supervisor_can_update_project()
    {
        $response = $this->get('api/supervisors');
        dd($response->IndexController());
       // $response->assertStatus(200);
    }*/
}
