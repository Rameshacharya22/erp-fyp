<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getAllEmployee()
    {
        return self::paginate(5);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_members', 'employee_id', 'project_id');
    }
}

