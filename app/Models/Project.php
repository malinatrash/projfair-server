<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
            if (in_array($prevProject->state_id, ProjectStateEnum::getPublicStatesIds())) {
                array_push($projects, $prevProject);
            }
            $prevProject = $prevProject->getPreviousProject();
        }
        $projects = array_reverse($projects);
        array_push($projects, $this);

        $nextProject = $this->getNextProject();
        while (isset($nextProject)) {
            if (in_array($nextProject->state_id, ProjectStateEnum::getPublicStatesIds())) {
                array_push($projects, $nextProject);
            }
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



    /** SCOPES (Query Logic) */

    public function scopeInDifficulties(Builder $query, array $difficulties)
    {

        if (isset($difficulties) && count($difficulties) != 0) {

            return $query->whereIn('difficulty', $difficulties);
        }
    }

    public function scopeInTitle(Builder $query, string $title)
    {
        if (isset($title)) {
            $title = ltrim($title, '"');
            $title = rtrim($title, '"');
            return $query->where('title', 'LIKE', '%' . $title . '%');
        }
    }


    // public function scopeInSpecialities(Builder $query, array $specialities)
    // {
    //https://dev.to/othmane_nemli/laravel-wherehas-and-with-550o
    //http://www.itmathrepetitor.ru/laravel-5-eloquent-chto-znachit-has-with-wherehas/
    //     if (isset($specialities) && count($specialities) != 0) {
    //         //TOO do
    //         // return $query->whereIn('difficulty', $specialities);
    //     }
    // }

    public function scopeInStates(Builder $query, array $states)
    {
        if (isset($states) && count($states) != 0) {

            return $query->whereIn('state_id', $states);
        }
    }

    public function scopeInTypes(Builder $query, array $types)
    {
        if (isset($types) && count($types) != 0) {

            return $query->whereIn('type_id', $types);
        }
    }

    public function scopeInDates(Builder $query, string $dateStart, string $dateEnd)
    {

        if (isset($dateStart) && strlen($dateStart) > 0) {
            $dateStart = ltrim($dateStart, '"');
            $dateStart = rtrim($dateStart, '"');
            $query->where('date_start', '>=', $dateStart);
        }

        if (isset($dateEnd) && strlen($dateEnd) > 0) {
            $dateEnd = ltrim($dateEnd, '"');
            $dateEnd = rtrim($dateEnd, '"');
            $query->where('date_end', '<=', $dateEnd);
        }

        return $query;
    }
}
