<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $hidden = ['api_token', 'numz', 'email', 'phone'];
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function activeProject()
    {
        $activeStateParticipation = StateParticipation::where('state', 'Участвует')->get()[0];
        $activeParticipation = Participation::where('candidate_id', $this->id)->where('state_id', $activeStateParticipation->id)->get();
        if (count($activeParticipation) != 0) {
            $activeParticipation = $activeParticipation[0];
            return Project::where('id', $activeParticipation->project_id)->get()[0];
        } else {
            return null;
        }
    }
}
