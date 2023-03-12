<?php

namespace Modules\School\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolSession extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['session_name'];
    
    protected static function newFactory()
    {
        return \Modules\School\Database\factories\SchoolSessionFactory::new();
    }
}
