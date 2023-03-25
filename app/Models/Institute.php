<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;
    protected $table = "institutes";
    protected $guarded = false;

    public $timestamps = false;


    public function specialities()
    {
        return $this->hasManyThrough(Speciality::class, Department::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
