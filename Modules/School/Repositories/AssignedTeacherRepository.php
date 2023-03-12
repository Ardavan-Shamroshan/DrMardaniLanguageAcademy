<?php

namespace Modules\School\Repositories;

use Modules\School\Entities\AssignedTeacher;
use Modules\School\Entities\Semester;
use Modules\School\Interfaces\AssignedTeacherInterface;

class AssignedTeacherRepository implements AssignedTeacherInterface
{

    public function assign($request) {
        try {
            AssignedTeacher::query()->create($request);
        } catch (\Exception $e) {
            throw new \Exception('Failed to assign teacher. ' . $e->getMessage());
        }
    }

    public function getTeacherCourses($session_id, $teacher_id, $semester_id) {
        if ($semester_id == 0) {
            $semester_id = Semester::query()->where('session_id', $session_id)
                ->first()->id;
        }
        return AssignedTeacher::with(['course', 'schoolClass', 'section'])->where('session_id', $session_id)
            ->where('teacher_id', $teacher_id)
            ->where('semester_id', $semester_id)
            ->get();
    }

    public function getAssignedTeacher($session_id, $semester_id, $class_id, $section_id, $course_id) {
        if ($semester_id == 0) {
            $semester_id = Semester::query()->where('session_id', $session_id)
                ->first()->id;
        }
        return AssignedTeacher::query()->where('session_id', $session_id)
            ->where('semester_id', $semester_id)
            ->where('class_id', $class_id)
            ->where('section_id', $section_id)
            ->where('course_id', $course_id)
            ->first();
    }
}