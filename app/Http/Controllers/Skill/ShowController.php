<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

/**
 * Получить информацию о навыке
 */
class ShowController extends Controller
{
    public function __invoke(Skill $skill)
    {
        return $skill;
    }
}
