<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $skills = Skill::all();

        return [
            'skills' => $skills
        ];
    }
}
