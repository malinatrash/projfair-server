<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;

/**
 * Получить информацию об институте
 */
class ShowController extends Controller
{
    public function __invoke(Institute $institute) // Получить информацию об институте
    {
        return $institute;
    }
}
