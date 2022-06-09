<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;
    protected $guarded = false;
    public $timestamps = false;

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
