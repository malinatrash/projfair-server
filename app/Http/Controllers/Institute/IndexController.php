<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() // Получить информацию обо всех институтах
    {
        $institutes = Institute::all();
        return $institutes;
    }
}
