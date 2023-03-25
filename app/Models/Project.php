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

    protected $table = "projects";


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

    public function projectSpecialities()
    {
        return $this->hasMany(ProjectSpeciality::class);
    }

    public function projectSupervisors()
    {
        return $this->hasMany(ProjectSupervisor::class);
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
     * Получить источник темы
     */
    public function themeSource(): BelongsTo
    {
        return $this->belongsTo(ThemeSource::class);
    }

    /**
     * Получить участников проекта (заявка в состоянии 'Участвует')
     */
    public function getParticipants(): Collection
    {

        $activeParticipations = Participation::with('candidate')->where('project_id', '=', $this->id)->whereIn('state_id', [2, 3])->get();
        $participants = $activeParticipations->pluck('candidate');
        return $participants;
    }

    public function getHistory(): array
    {
        $projects = [];

        $prevProject = $this->getPreviousProject();
        while (isset($prevProject)) {
            array_push($projects, $prevProject);
            $prevProject = $prevProject->getPreviousProject();
        }
        $projects = array_reverse($projects);
        array_push($projects, $this);

        $nextProject = $this->getNextProject();
        while (isset($nextProject)) {
            array_push($projects, $nextProject);
            $nextProject = $nextProject->getNextProject();
        }

        return $projects;
    }

    /**
     * Получить предыдущий проект
     */
    public function getPreviousProject(): Project | null
    {
        return Project::find($this->prev_project_id);
    }

    /**
     * Получить следующий проект
     */
    public function getNextProject(): Project | null
    {
        return Project::firstWhere('prev_project_id', $this->id);
    }
}
