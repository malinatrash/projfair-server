<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSupervisor extends Model
{
    use HasFactory;

    protected $table = "project_supervisor";
    protected $guarded = false;

    public function role()
    {
        return $this->belongsTo(ProjectSupervisorRole::class, 'project_supervisor_role_id');
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
}
