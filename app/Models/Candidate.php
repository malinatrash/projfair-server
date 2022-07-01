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
}
