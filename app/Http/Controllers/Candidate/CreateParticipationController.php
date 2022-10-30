<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\StoreRequest;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;
use App\Models\ProjectSpeciality;
use App\Models\Speciality;
use App\Models\StateParticipation;
use Illuminate\Http\Request;

/**
 * Создание заявки на проект
 */
class CreateParticipationController extends Controller
{
    public function __invoke(Project $project, StoreRequest $request)
    {
        $project->load('specialities', 'state');

        if ($project->state->id != 1) {
            return response("Проект не в статусе набора заявок", 403);
        }
        $id_project = $project->id;

        $candidate = $request->get('candidate');

        $candidateSpeciality = explode("-", $candidate['training_group'])[0];
        $idsProject = [];


        if ($candidateSpeciality != null) {
            $specilities = Speciality::where('name', $candidateSpeciality)->get();
            if (count($specilities) == 0) {
                return response('Не найдено', 404);
            }
            $specility1 = $specilities[0];
            $specilitiesInInstitute = $specility1->institute->specialities;
            $specilitiesInInstituteIds = $specilitiesInInstitute->pluck('id')->toArray();
            $idProjectsWithSpecialities = ProjectSpeciality::select('project_id as id')->whereIn('speciality_id', $specilitiesInInstituteIds)->get()->toArray();

            foreach ($idProjectsWithSpecialities as $key => $value) {
                array_push($idsProject, $value['id']);
            }
        }

        if (!in_array($id_project, $idsProject)) {
            return  response("Вы не можете подать заявку проект с другого института", 403);
        }



        $id = $candidate['id'];


        $candidatesParticipations = Participation::where('candidate_id', $id)->get();
        if (count($candidatesParticipations) > 3) {
            return  response("Вы уже подали 3 заявки", 403);
        }
        if (Participation::where('candidate_id', $id)->where('project_id', $id_project)->get()->count() != 0) {
            return response()->json(['error' => 'Заявка на этот проект уже есть'], 400);
        }
        $data =  $request->json()->all();
        $bodyContent = $request->getContent();
        $priority = json_decode($bodyContent)->priority;
        //dd(json_decode($bodyContent)->priority);
        Participation::create([
            'priority' => $request['priority'],

            'project_id' => $id_project,
            'candidate_id' => $id,
            'state_id' => 1,
        ])->id;



        return response()->json(['status' => 'OK'], 200);
    }
}
