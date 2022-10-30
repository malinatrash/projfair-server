<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

/**
 * Получение всех типов проекта
 */
class IndexController extends Controller
{
    public function __invoke() // Получение типов проекта
    {
        $types = Type::all();
        return $types;
    }
}
