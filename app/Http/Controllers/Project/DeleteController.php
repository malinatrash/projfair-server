<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Project $project)
    {
        $project->delete();
        return response([]);
    }
}
