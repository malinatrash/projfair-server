<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Supervisor;
use Illuminate\Http\Request;

/**
 * Получение всех фио преподавателей
 */
class NamesController extends Controller
{
    public function __invoke()
    {
        $data = Supervisor::select('id', 'fio')->get();
        return response()->json($data, 200);
    }
}
