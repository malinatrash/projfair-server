<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type\UpdateRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Type $type)
    {
        $data = $request->validated();
        $type->update($data);
        return response([]);
    }
}
