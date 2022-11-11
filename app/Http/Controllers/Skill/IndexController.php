<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\Speciality;
use Illuminate\Http\Request;

/**
 * Получить данные для фильтрации по навыкам и специальностям. Скрывать данные других институтов если пользователь авторизован
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/skills/",
     *     summary="Получить данные для фильтрации по навыкам и специальностям. Скрывать данные других институтов если пользователь авторизован",
     *      tags={"Skill"},
     *     @OA\Response(
     *         response="200",
     *         description="Проекты @TODO RESPONCE",
     *
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/Skill"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $skills = Skill::all();
        $specialities = Speciality::all();
        $skillCategories = SkillCategory::all();

        $candidateSpeciality = null;

        $candidate = $request->get('candidate');
        if ($candidate != null) {
            $candidateSpeciality = explode("-", $candidate['training_group'])[0];

            $specilities = Speciality::where('name', $candidateSpeciality)->get();
            if (count($specilities) == 0) {
                return response('Не найдено', 404);
            }
            $specility1 = $specilities[0];
            $specilitiesInInstitute = $specility1->institute->specialities;
            $specilitiesInInstituteIds = $specilitiesInInstitute->pluck('id')->toArray();
            $specialities = [];
            $specs = Speciality::all()->whereIn('id', $specilitiesInInstituteIds);
            foreach ($specs as $key => $value) {
                array_push($specialities, $value);
            }
        }

        return [
            'skills' => $skills,
            'specialties' => $specialities,
            'skillCategories' => $skillCategories,
        ];
    }
}
