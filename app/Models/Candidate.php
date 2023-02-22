<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Модель студента
 */
class Candidate extends Model
{
    use HasFactory;

    protected $guarded = false;

    /** Данные которые не достаются из БД */
    protected $hidden = ['api_token', 'numz', 'email', 'phone'];

    /**
     * Навыки студента
     */
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    /**
     * Группа студента
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * Проект, на котором учавствует студент или null
     *
     * @return Проект или null
     */
    public function activeProject(): Project | null
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

    /**
     * Архивные проекты студента или null
     *
     * @return Проект или null
     */
    public function arhiveProjects(): Collection
    {
        $arhiveStateParticipation = StateParticipation::where('state', 'Архив')->get()[0];
        $projectsIds = Participation::where('candidate_id', $this->id)->where('state_id', $arhiveStateParticipation->id)->pluck('project_id');
        return Project::whereIn('id', $projectsIds)->get();
    }

    public function getSpeciality(): Speciality | null
    {
        $candidateSpeciality = explode("-", $this->training_group)[0];
        return Speciality::firstWhere('name', $candidateSpeciality);
    }

    public function getDepartment(): Department | null
    {
        $speciality = $this->getSpeciality();
        if (!isset($speciality)) {
            return null;
        }
        return $speciality->department;
    }

    public function getInstitute(): Institute | null
    {
        $department = $this->getDepartment();
        if (!isset($department)) {
            return null;
        }
        return $department->institute;
    }
}
