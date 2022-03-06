<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $skills = Skill::all();
        return $skills;
    }
}
