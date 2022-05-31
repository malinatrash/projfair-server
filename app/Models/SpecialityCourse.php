<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialityCourse extends Model
{
    use HasFactory;
    protected $table = "speciality_courses";
    protected $guarded = false;

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
