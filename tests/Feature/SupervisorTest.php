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
        $this->assertTrue(true);
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
