<?php

namespace Modules\School\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = ['semester_name', 'start_date', 'end_date', 'session_id'];
    
    protected static function newFactory()
    {
        return \Modules\School\Database\factories\SemesterFactory::new();
    }
}
