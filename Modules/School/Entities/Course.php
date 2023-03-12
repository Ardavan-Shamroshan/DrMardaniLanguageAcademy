<?php

namespace Modules\School\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'class_id', 'semester_id', 'session_id'];
    
    protected static function newFactory()
    {
        return \Modules\School\Database\factories\CourseFactory::new();
    }
}
