<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $candidates = Candidate::all();
        return $candidates;
    }
}
