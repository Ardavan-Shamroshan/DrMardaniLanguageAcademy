<?php

namespace Modules\School\Repositories;

use Modules\School\Entities\AssignedTeacher;
use Modules\School\Entities\SchoolClass;
use Modules\School\Interfaces\SchoolClassInterface;

class SchoolClassRepository implements SchoolClassInterface {
    public function create($request) {
        try {
            SchoolClass::query()->create($request);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create School Class. '.$e->getMessage());
        }
    }

    public function getAllBySession($session_id) {
        return SchoolClass::query()->where('session_id', $session_id)->get();
    }

    public function getAllBySessionAndTeacher($session_id, $teacher_id) {
        return AssignedTeacher::with('schoolClass')->where('teacher_id', $teacher_id)
            ->where('session_id', $session_id)
            ->get();
    }

    public function getAllWithCoursesBySession($session_id) {
        // return SchoolClass::query()->with(['courses','syllabi'])->where('session_id', $session_id)->get();
        return SchoolClass::query()->with(['courses'])->where('session_id', $session_id)->get();
    }

    public function getClassesAndSections($session_id) {
        $school_classes = $this->getAllWithCoursesBySession($session_id);

        $sectionRepository = new SectionRepository();

        $school_sections = $sectionRepository->getAllBySession($session_id);

        $data = [
            'school_classes' => $school_classes,
            'school_sections'=> $school_sections,
        ];

        return $data;
    }

    public function findById($class_id) {
        return SchoolClass::query()->find($class_id);
    }

    public function update($request) {
        try {
            SchoolClass::query()->find($request->class_id)->update([
                'class_name'  => $request->class_name,
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Failed to update School Class. '.$e->getMessage());
        }
    }
}