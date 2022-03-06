<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Http\Requests\State\StoreRequest;
use App\Models\State;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        State::create($data);
        return response([]);
    }
}
