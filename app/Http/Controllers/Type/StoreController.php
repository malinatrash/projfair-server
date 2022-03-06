<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type\StoreRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Type::create($data);
        return response([]);
    }
}
