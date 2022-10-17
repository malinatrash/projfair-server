<?php

namespace App\Http\Controllers\Admin\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;
use App\Http\Requests\Institute;

class StoreController extends Controller 
{
    public function __invoke(StoreRequest $request) {
        $data = request -> validate();
        Institute::create($data);
        return response([]);
    }
}