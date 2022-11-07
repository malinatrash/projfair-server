<?php

namespace App\Http\Controllers\Admin\Institute;

use App\Http\Controllers\Controller;
use App\Http\Requests\Institute\StoreRequest;
use App\Models\Institute;
use Illuminate\Http\Request;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validate();
        Institute::create($data);
        return response([]);
    }
}
