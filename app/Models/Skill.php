<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель навыка (скила)
 */
class Skill extends Model
{
    use HasFactory;

    protected $guarded = false;
    public $timestamps = false;

    public function candidates()
    {
        return $this->belongsToMany(Candidate::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function skillCategory()
    {
        return $this->belongsTo(SkillCategory::class);
    }
}
