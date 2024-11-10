<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'name',
        'is_finished',
        'start_date',
        'description',
        'project_goal',
        'progress',
        'image',
    ];

    public function volunteers()
    {
        return $this->belongsToMany(Volunteer::class, 'projects_volunteers');
    }
}
