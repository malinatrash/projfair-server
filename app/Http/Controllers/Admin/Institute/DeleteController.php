<?php

namespace App\Http\Controllers\Admin\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Institute $intitute)
    {
        $intitute -> delete();
        return response([]);
    }
}
