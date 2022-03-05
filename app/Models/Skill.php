<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function candidates()
    {
        return $this->belongsToMany(Candidate::class);
    }
}
