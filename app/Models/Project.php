<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function candidates()
    {
        return $this->hasMany(Participation::class, 'project_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}