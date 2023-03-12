<?php

namespace Modules\School\Repositories;

use Modules\School\Entities\Semester;
use Modules\School\Interfaces\SemesterInterface;

class SemesterRepository implements SemesterInterface
{
    public function create($request) {
        try {
            Semester::query()->create($request);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create School Semester. ' . $e->getMessage());
        }
    }

    public function getAll($session_id) {
        return Semester::query()->where('session_id', $session_id)->orderBy('id', 'desc')->get();
    }
}