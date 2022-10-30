<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __invoke(Request $request) // Получение заявок студента
    {
        $id = $request->get('candidate')->id;

        $data = Participation::where('id_candidate', $id);

        return $data;
    }
}
