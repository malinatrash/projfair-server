<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\StateParticipation;
use App\Models\Supervisor;
use App\Http\Resources\CandidateResource;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function __invoke(Request $request)
    {
        return new CandidateResource($request->get('candidate'));
    }
}
