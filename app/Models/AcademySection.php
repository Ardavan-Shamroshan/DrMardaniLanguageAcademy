<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademySection extends Model
{
    use HasFactory;


    protected $fillable = [
        'academy_section_name',
        'gender'
    ];
}
