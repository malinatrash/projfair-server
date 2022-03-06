<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Participation $participation)
    {
        $participation->delete();
        return response([]);
    }
}
