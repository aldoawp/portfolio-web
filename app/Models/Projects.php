<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'project_name',
        'category',
        'members',
        'company',
        'time_completion',
        'overview',
        'scale',
        'status',
        'challenges',
        'solutions',
        'tech_stack',
        'performance_metrics',
        'impacts',
        'lesson_learned',
    ];
    
}
