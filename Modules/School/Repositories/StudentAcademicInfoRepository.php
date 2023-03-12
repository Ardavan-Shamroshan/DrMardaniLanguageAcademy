<?php

namespace Modules\School\Repositories;

use Modules\School\Entities\StudentAcademicInfo;

class StudentAcademicInfoRepository {
    public function store($request, $student_id) {
        try {
            StudentAcademicInfo::query()->create([
                'student_id'        => $student_id,
                'board_reg_no'      => $request['board_reg_no'],
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create Student academic information. '.$e->getMessage());
        }
    }
}