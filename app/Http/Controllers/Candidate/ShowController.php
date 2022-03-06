<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Candidate $candidate)
    {
        return $candidate;
    }
}
