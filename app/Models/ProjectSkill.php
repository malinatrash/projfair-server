<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSkill extends Model
{
    use HasFactory;
    protected $table = "project_skill";
    protected $guarded = false;

    public $timestamps = false;
}
