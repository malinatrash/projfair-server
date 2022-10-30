<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandidateResource;
use App\Models\Candidate;
use Illuminate\Http\Request;

/**
 * Получить информацию о всех студентах
 */
class ShowController extends Controller
{
    public function __invoke(Candidate $candidate) // Получить информацию о студенте
    {
        $candidate->load('group.specialityCourse.speciality');
        return new CandidateResource($candidate);
    }
}
