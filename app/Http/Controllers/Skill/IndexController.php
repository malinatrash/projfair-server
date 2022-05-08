<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\Speciality;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $skills = Skill::all();
        $specialities = Speciality::all();
        $skillCategories = SkillCategory::all();
        return [
            'skills' => $skills,
            'specialties' => $specialities,
            'skillCategories' => $skillCategories
        ];
    }
}
