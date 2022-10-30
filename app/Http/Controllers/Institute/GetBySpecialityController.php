<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

/**
 * Получить институты по названию специльности
 */
class GetBySpecialityController extends Controller
{
    public function __invoke($specialityName) // Получить институты по названию специльности
    {
        $specilities = Speciality::where('name', $specialityName)->get();
        if (count($specilities) == 0) {
            return response('Не найдено', 404);
        }
        $specilities->load('institute');

        return $specilities[0]->institute;
    }
}
