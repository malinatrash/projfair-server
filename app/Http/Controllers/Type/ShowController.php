<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Type $type)
    {
        return $type;
    }
}
