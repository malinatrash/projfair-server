<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\StoreRequest;
use App\Models\Participation;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Participation::create($data);
        return response([]);
    }
}
