<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Institute $institute)
    {
        //dd($institute);
        return $institute;
    }
}
