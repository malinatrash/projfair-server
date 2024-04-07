<?php

namespace Tests\Feature\Project;


use App\Models\Project;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\ProjectFactory;  // Импорт фабрики проекта
use Database\Factories\CandidateFactory;  // Импорт фабрики кандидата
use Database\Factories\ParticipationFactory;  // Импорт фабрики участи

class UpdateParticipationControllerTest extends TestCase

{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    //use RefreshDatabase;


    public function testUpdateParticipation()
    {
        // Создаем тестовые данные
        $project = Project::factory()->create();
        $candidate = Candidate::factory()->create();
        $participation = Participation::factory()->create([
            'project_id' => $project->id,
            'candidate_id' => $candidate->id,
        ]);
    
        // Данные для обновления
        $data = [
            'mark' => 5,
            'review' => 'Отлично!',
        ];
    
        // Формируем URL
        $url = "/api/supervisor/projects/{$project->id}/candidates/{$candidate->id}";
        info("Sending PATCH request to: {$url}");
    
        // Выполняем запрос к вашему контроллеру
        $response = $this->patch($url, $data);
    
        // Проверяем, что ответ имеет статус 200 OK
        $response->assertStatus(Response::HTTP_OK);
    
        // Проверяем, что обновленные данные соответствуют ожидаемым данным
        $this->assertDatabaseHas('participations', [
            'id' => $participation->id,
            'mark' => $data['mark'],
            'review' => $data['review'],
        ]);
    
        // Проверяем, что в ответе возвращается ожидаемый JSON
        $response->assertJson([
            'mark' => $data['mark'],
            'review' => $data['review'],
        ]);
    }


    /*
    public function testUpdateParticipation()
    {
        // Создаем тестовые данные
        $participation = Participation::factory()->create();

        // Данные для обновления
        $data = [
            'mark' => 5,
            'review' => 'Отлично!',
        ];

        // Выполняем запрос к вашему контроллеру
        $response = $this->json('PATCH', "/api/supervisor/projects/{$participation->project_id}/candidates/{$participation->candidate_id}", $data);

        // Проверяем, что ответ имеет статус 200 OK
        $response->assertStatus(Response::HTTP_OK);

        // Проверяем, что обновленные данные соответствуют ожидаемым данным
        $this->assertDatabaseHas('participations', [
            'id' => $participation->id,
            'mark' => $data['mark'],
            'review' => $data['review'],
        ]);

        // Проверяем, что в ответе возвращается ожидаемый JSON
        $response->assertJson([
            'mark' => $data['mark'],
            'review' => $data['review'],
        ]);
    }


    
    public function testUpdateParticipation()
    {
        // Создать проект, кандидата и участие
        $project = Project::factory()->create();
        $candidate = Candidate::factory()->create();

        $participation = Participation::factory()->create([
            'project_id' => $project->id,
            'candidate_id' => $candidate->id,
        ]);

        // Отправить запрос на обновление
        $this->patchJson("/projects/{$project->id}/candidates/{$candidate->id}", [
            'mark' => 5,
            'review' => 'Отлично!',
        ]);

        // Проверить, что данные в базе данных были обновлены
        $this->assertDatabaseHas('participations', [
            'id' => $participation->id,
            'mark' => 5,
            'review' => 'Отлично!',
        ]);
    }*/
}
