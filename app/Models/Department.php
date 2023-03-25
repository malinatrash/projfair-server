<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = "departments";
    protected $guarded = false;

    public $timestamps = false;


    public function specialities()
    {
        return $this->hasMany(Speciality::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
