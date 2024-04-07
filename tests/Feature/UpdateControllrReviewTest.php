<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Supervisor;
use App\Models\Project;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UpdateControllrReviewTest extends TestCase
{
      
    use DatabaseTransactions;

    /** @test */
    public function test_update_review()
    {
        // Создаем supervisor
        $supervisorCreator = Supervisor::factory()->create([
            'api_token' => 'token_example'
        ]);

        // Создаем проект
        $project = Project::factory()->create();

        // Вызываем метод PATCH контроллера для обновления поля review
        $editedProject = $this->patch('api/supervisor/projects/' . $project->id, [
            'review' => 'Новый обзор проекта',
        ], [
            "token" => $supervisorCreator->api_token
        ]);

        // Проверяем, что статус ответа 200 (Успешное обновление)
        $editedProject->assertStatus(200);

        // Обновляем информацию о проекте
        $project->refresh();

        // Проверяем, что поле review было успешно обновлено
        $this->assertEquals('Новый обзор проекта', $project->review);
    }
}
