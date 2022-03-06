<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Candidate $candidate)
    {
        $candidate->delete();
        return response([]);
    }
}
