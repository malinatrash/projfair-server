<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialityCourseSkill extends Model
{
    use HasFactory;
    protected $table = "speciality_course_skill";
    protected $guarded = false;

    public $timestamps = false;
}
