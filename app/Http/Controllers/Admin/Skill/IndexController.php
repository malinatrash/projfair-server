<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $skills = Skill::all();
        
        return [
            'skills' => $skills
        ]
    }
}