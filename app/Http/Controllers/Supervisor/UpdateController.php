<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supervisor\UpdateRequest;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Supervisor $supervisor)
    {
        $data = $request->validated();
        $supervisor->update($data);
        return response([]);
    }
}
