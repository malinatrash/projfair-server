<?php

namespace App\Models;


enum ProjectSupervisorRoleEnum: int
{
    case creator = 1;
    case supervisor = 2;
    case coSupervisor = 3;
    case expert = 4;
}
