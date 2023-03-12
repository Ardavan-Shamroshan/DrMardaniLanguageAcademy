<?php

namespace Modules\School\Repositories;

use Modules\School\Entities\Course;
use Modules\School\Interfaces\CourseInterface;

class CourseRepository implements CourseInterface {
    public function create($request) {
        try {
            Course::query()->create($request);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create School Course. '.$e->getMessage());
        }
    }

    public function getAll($session_id) {
        return Course::query()->where('session_id', $session_id)->get();
    }

    public function getByClassId($class_id) {
        return Course::query()->where('class_id', $class_id)->get();
    }

    public function findById($course_id) {
        return Course::query()->find($course_id);
    }

    public function update($request) {
        try {
            Course::query()->find($request->course_id)->update([
                'course_name'  => $request->course_name,
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Failed to update Course. '.$e->getMessage());
        }
    }
}