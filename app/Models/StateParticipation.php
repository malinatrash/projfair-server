<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateParticipation extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
}
