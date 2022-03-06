<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Project $project)
    {
        $data = $request->validated();
        $project->update($data);
        return response([]);
    }
}
