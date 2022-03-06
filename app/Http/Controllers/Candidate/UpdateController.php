<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\UpdateRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Candidate $candidate)
    {
        $data = $request->validated();
        $candidate->update($data);
        return response([]);
    }
}
