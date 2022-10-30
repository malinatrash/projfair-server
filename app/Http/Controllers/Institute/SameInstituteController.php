<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SameInstituteController extends Controller
{
    public function __invoke($specialityName1, $specialityName2)
    {
        // Проверка находятся ли две специальности в одном институте
        $specilities = Speciality::where('name', $specialityName1)->get();
        if (count($specilities) == 0) {
            return response('Не найдено', 404);
        }
        $specility1 = $specilities[0];
        $institute1 = $specility1->institute;
        $specilities = Speciality::where('name', $specialityName2)->get();
        if (count($specilities) == 0) {
            return response('Не найдено', 404);
        }
        $specility2 = $specilities[0];
        $institute2 = $specility2->institute;

        return ['isSame' => $institute1->id == $institute2->id];
    }
}
