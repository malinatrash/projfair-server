<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;

/**
 * Получение всех скилов
 */
class IndexController extends Controller
{
    public function __invoke()
    {
        $skills = Skill::all();

        return [
            'skills' => $skills
        ];
    }
}
