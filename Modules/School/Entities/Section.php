<?php

namespace Modules\School\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['section_name', 'room_no', 'class_id', 'session_id'];
    protected static function newFactory()
    {
        return \Modules\School\Database\factories\SectionFactory::new();
    }

    /**
     * Relations
     */
    public function schoolClass() {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}
