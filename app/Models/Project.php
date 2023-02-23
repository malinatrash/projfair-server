<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

class Project extends Model
{
    use HasFactory;

    protected $guarded = false;

    /**
     * Получить требуемые навыки для проекта
     */
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    /**
     * Получить требуемые специальности на проекте
     */
    public function specialities()
    {
        return $this->belongsToMany(Speciality::class);
    }

    /**
     * Получить все заявки на проект
     */
    public function participation()
    {
        return $this->hasMany(Participation::class, 'project_id');
    }

    /**
     * Получить состояние проекта
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Кафедра, к которой относится проект
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Получить руководителей проекта
     */
    public function supervisors()
    {
        return $this->belongsToMany(Supervisor::class);
    }

    /**
     * Получить тип проекта
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * Получить участников проекта (заявка в состоянии 'Участвует')
     */
    public function participants(): Collection
    {

        $activeParticipations = Participation::with('candidate')->where('project_id', '=', $this->id)->whereIn('state_id', [2, 3])->get();
        $participants = $activeParticipations->pluck('candidate');
        return $participants;
    }

    /**
     * Получить связанный проект из предыдущего семестра
     */
    public function prevProject(): Project
    {
        $prevProjectId = $this->prev_project_id;

        return Project::find($prevProjectId);
    }
}
