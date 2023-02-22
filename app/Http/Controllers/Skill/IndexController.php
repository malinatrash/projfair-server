<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillCategoryResource;
use App\Http\Resources\SkillResource;
use App\Http\Resources\SpecialityResource;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\Speciality;
use Illuminate\Database\Eloquent\Collection;
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
     *         description="Навыки, специальности, категории скилов",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="skills",
     *                 type="array",
     *                  description="Все навыки",
     *                  @OA\Items(ref="#/components/schemas/Skill")
     *             ),
     *             @OA\Property(
     *                 property="specialities",
     *                 type="array",
     *                  description="Специальности. Если пользователь авторизован, то показываются специальности только его института",
     *                  @OA\Items(ref="#/components/schemas/Skill")
     *             ),
     *             @OA\Property(
     *                 property="skillCategories",
     *                 type="array",
     *                 description="Категории скилов",
     *                  @OA\Items(ref="#/components/schemas/Skill")
     *             ),
     *        )
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $skills = Skill::all();
        $specialities = Speciality::all();
        $skillCategories = SkillCategory::all();

        $specialities = $this->filterSpecilitiesByCandidate($request, $specialities);

        return [
            'skills' => SkillResource::collection($skills),
            'specialties' => SpecialityResource::collection($specialities),
            'skillCategories' => SkillCategoryResource::collection($skillCategories),
        ];
    }

    private function filterSpecilitiesByCandidate(Request $request, Collection $specilities): Collection
    {
        $candidate = $request->get('candidate');
        if ($candidate == null) {
            return $specilities;
        }
        $candidateInsitute = $candidate->getInstitute();

        if (!isset($candidateInsitute)) {
            return $specilities;
        }
        $specilitiesInInstitute = $candidateInsitute->specialities;
        $specilitiesInInstituteIds = $specilitiesInInstitute->pluck('id')->toArray();

        return $specilities->whereIn('id', $specilitiesInInstituteIds);
    }
}
