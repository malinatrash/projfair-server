<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HarvestSetting extends Model
{
    use HasFactory;

    protected $table = "harvest_settings";
    protected $guarded = false;
}
