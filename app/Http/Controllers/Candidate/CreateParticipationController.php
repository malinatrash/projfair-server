<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\StoreRequestAdminParticipation;
use App\Http\Services\HarvestSettingService;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\ParticipationStateEnum;
use App\Models\Project;
use App\Models\ProjectSpeciality;
use App\Models\ProjectStateEnum;
use App\Models\Speciality;


/**
 * Создание заявки на проект
 */
class CreateParticipationController extends Controller
{
    public function __construct(private HarvestSettingService $harvestSettingService)
    {
    }
    /**
     * @OA\Post(
     *     path="/api/participations/${id}",
     *     summary="Создание заявки на проект",
     *      tags={"CABINET CANDIDATE"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID проекта",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Заявка создана",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Не найдено",
     *     ),
     *     @OA\Response(
     *         response="403",
     *         description="Сообщение об ошибке",
     *     )
     * )
     * )
     */
    public function __invoke(Project $project, StoreRequestAdminParticipation $request)
    {
        $project->load('specialities');
        $candidate = $request->get('candidate');

        if ($this->harvestSettingService->isCandidateBannedByHarvestSettings($candidate)) {
            return response("Сейчас вы не можете подать заявку", 403);
        }

        if (!$this->isProjectOnRecruitment($project)) {
            return response("Проект не в статусе набора заявок", 403);
        }

        if (!$this->isCandidateInProjectSpecialities($candidate, $project)) {
            return response("Вы не можете подать заявку проект с другого института", 403);
        }

        if ($this->isCandidateHasMaxSendedParticipation($candidate)) {
            return response("Вы уже подали 3 заявки", 403);
        }

        if ($this->isCandidateOnProject($candidate, $project)) {
            return response('Заявка на этот проект уже есть', 403);
        }

        $candidateId = $candidate['id'];
        $projectId = $project->id;
        Participation::create([
            'priority' => $request['priority'],
            'project_id' => $projectId,
            'candidate_id' => $candidateId,
            'state_id' => 1,
        ])->id;

        return response()->json(['status' => 'OK'], 200);
    }

    /**
     * Проверка имеет ли студент максимальное количество отправленных заявок
     *
     * @param Candidate $candidate
     * @return bool
     */
    private function isCandidateHasMaxSendedParticipation(Candidate $candidate): bool
    {
        $candidateId = $candidate['id'];
        $allCandidatesParticipations = Participation::where('candidate_id', $candidateId)->get();

        $candidatesParticipations = [];
        foreach ($allCandidatesParticipations as $participation) {
            if ($participation->priority < 4 && $participation->state_id === ParticipationStateEnum::ditribution->value) {
                array_push($candidatesParticipations, $participation);
            }
        }


        return count($candidatesParticipations) > 2;
    }

    /**
     * Имеют ли студент и проект общую специальность
     * @param Candidate $candidate
     * @param Project $project
     * @return bool
     */
    private function isCandidateInProjectSpecialities(Candidate $candidate, Project $project): bool
    {
        $candidateSpeciality = $this->getCandidateSpeciality($candidate);
        if ($candidateSpeciality == null) {
            return false;
        }

        $idsProjectWithCandidateSpeciality = [];

        $specilitiesInInstitute = $candidateSpeciality->getInstitute()->specialities;
        $specilitiesInInstituteIds = $specilitiesInInstitute->pluck('id')->toArray();
        $idProjectsWithSpecialities = ProjectSpeciality::select('project_id as id')->whereIn('speciality_id', $specilitiesInInstituteIds)->get()->toArray();

        foreach ($idProjectsWithSpecialities as $key => $value) {
            array_push($idsProjectWithCandidateSpeciality, $value['id']);
        }

        return in_array($project->id, $idsProjectWithCandidateSpeciality);
    }

    /**
     * Получить специальность на которой учиться студента
     *
     * @param Candidate $candidate - студент
     * @return Speciality|null - специальность
     */
    private function getCandidateSpeciality(Candidate $candidate): Speciality | null
    {

        $candidateSpecialityName = explode("-", $candidate['training_group'])[0];

        if ($candidateSpecialityName == null) {
            return null;
        }
        $specility = Speciality::where('name', $candidateSpecialityName)->first();
        return $specility;
    }

    /**
     * Связан ли студент с проектом
     *
     * @param Candidate $candidate - студент
     * @return bool
     */
    function isCandidateOnProject(Candidate $candidate, Project $project): bool
    {
        $candidateId = $candidate['id'];
        $projectId = $project->id;
        return Participation::where('candidate_id', $candidateId)->where('project_id', $projectId)->get()->count() != 0;
    }

    /**
     * Находится ли проект в состоянии набора
     * @param Project $project
     * @return bool
     */
    function isProjectOnRecruitment(Project $project): bool
    {
        return $project->state_id == ProjectStateEnum::recruitment->value;
    }
}
