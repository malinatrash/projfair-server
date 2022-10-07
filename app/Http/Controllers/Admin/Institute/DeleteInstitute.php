<?php

namespace App\Http\Controllers\Admin\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;

class DeleteInstitute extends Institute
{
    public function __invoke(admin $admin)
    {
        $admin -> delete();
        return response([]);
    }
}
