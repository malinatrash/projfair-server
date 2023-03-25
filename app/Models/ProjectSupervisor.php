<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSupervisor extends Model
{
    use HasFactory;

    protected $table = "project_supervisor";
    protected $guarded = false;

    public $timestamps = false;


    public function roles()
    {
        return $this->belongsToMany(ProjectSupervisorRole::class, 'project_supervisor_role', 'project_supervisor_id', 'project_supervisor_role_id');
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
}
