<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    protected $guarded = false;

    /**
     * Кафедра, к которой относится преподаватель
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Получить проекты преподавателя
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    /**
     * Получить проекты преподавателя на рассмотрении
     */
    public function projectsOnReview()
    {
        return $this->belongsToMany(Project::class)->where(['state_id' => 5]);
    }
}
