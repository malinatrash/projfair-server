<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use Illuminate\Http\Request;

class DeleteParticipationController extends Controller
{
    public function __invoke($id, Request $request)
    {
        Participation::where('id', $id)->update(['id_state' => 6]); //исключен

        $data = Participation::where('id', $id)->get()[0];


        if (isset($request['review'])) {
            // Review::create([
            //     'text' => $request['review'],
            //     'id_student' => $data['id_candidate'],
            //     'id_project' => $data['id_project'],
            //     'date' => date('Y-m-d')     
            // ]);
        }

        return response()->json(['success' => 'OK'], 200);
    }
}
