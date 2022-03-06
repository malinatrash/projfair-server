<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Type $type)
    {
        $type->delete();
        return response([]);
    }
}
