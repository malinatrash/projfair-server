<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Получение архивных проектов студента
 */
class ArhiveProjectsController extends Controller
{
    public function __invoke(Request $request)
    {

        $arhiveProjects = $request->get('candidate')->arhiveProjects();
        return $arhiveProjects;
    }
}
