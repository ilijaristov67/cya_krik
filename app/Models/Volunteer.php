<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $table = 'volunteers';

    protected $fillable = [
        'name',
        'lastname',
        'country',
        'is_longterm',
        'biography',
        'image',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'projects_volunteers');
    }
}
