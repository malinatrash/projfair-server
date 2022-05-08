<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

class ParticipationsController extends Controller
{
    public function __invoke(Request $request)
    {
        $token = $request->get('api_token');
        $id = Candidate::where('api_token', $token)->select('id')->get()[0]['id'];

        $data = Participation::where('id_candidate', $id);
        return $data;
    }
}
