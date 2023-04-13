<?php

namespace Tests\Feature;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function test_example()
    {
        $prevCount = Project::all()->count();
        Project::factory()->create();
        $count = Project::all()->count();



        $this->assertEquals($prevCount + 1, $count);
    }
}
