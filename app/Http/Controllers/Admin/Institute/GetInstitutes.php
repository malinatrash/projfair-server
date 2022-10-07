<?php

namespace App\Http\Controllers\Admin\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;

class GetInstitutes extends Admin { //Я не до конца понял что он должен был экстендить так что поставил админа
    public function __invoke(Request $request)
    {
        $token = $request->get('api_token');
        $data = Admin::where('api_token', $token)->get()[0];
        if (!$data) {
            return response('Не найдено', 404);
        }
        return response()->json($data, 200);
    }
}
