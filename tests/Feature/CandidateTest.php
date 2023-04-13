<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;

use Tests\TestCase;

class CandidateTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function send_participation_with_harvesting()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function edit_participation_with_harvesting()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function can_not_edit_participation_without_harvesting()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function can_not_send_participation_without_harvesting()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function can_not_send_participation_without_speciality()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function can_not_send_participation_without_can_send_participation()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function can_not_send_participation_with_banned_specialities()
    {
        $this->assertTrue(true);
    }
}
