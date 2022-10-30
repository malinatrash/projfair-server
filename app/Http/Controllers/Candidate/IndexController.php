<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandidateResource;
use App\Models\Candidate;
use Illuminate\Http\Request;

/**
 * Получить информацию о всех студентах
 */
class IndexController extends Controller
{
    public function __invoke() // Получить информацию о всех студентах
    {
        $candidates = Candidate::all();
        return CandidateResource::collection($candidates);
    }
}
