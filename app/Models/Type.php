<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Тип проекта
 * 1 - Прикладной
 * 2 - Научная
 * 3 - Сервисный
 */
class Type extends Model
{
    use HasFactory;

    protected $guarded = false;
    public $timestamps = false;

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
