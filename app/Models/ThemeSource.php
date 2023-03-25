<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemeSource extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $table = "theme_sources";

    public $timestamps = false;

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
