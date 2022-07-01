<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function stateParticipation()
    {
        return $this->belongsTo(StateParticipation::class);
    }
    public function state()
    {
        return $this->belongsTo(StateParticipation::class);
    }
}
