<?php

namespace Modules\School\Repositories;

use Modules\Home\Entities\AcademicSetting;
use Modules\School\Interfaces\AcademicSettingInterface;

class AcademicSettingRepository implements AcademicSettingInterface
{
    public function getAcademicSetting() {
        return AcademicSetting::query()->find(1);
    }

    public function updateAttendanceType($request) {
        try {
            AcademicSetting::query()->where('id', 1)->update($request);
        } catch (\Exception $e) {
            throw new \Exception('Failed to update attendance type. ' . $e->getMessage());
        }
    }

    public function updateFinalMarksSubmissionStatus($request) {
        $status = "off";
        if (isset($request['marks_submission_status']) && $request['marks_submission_status'] == true) {
            $status = "on";
        }
        try {
            AcademicSetting::query()->where('id', 1)->update(['marks_submission_status' => $status]);
        } catch (\Exception $e) {
            throw new \Exception('Failed to update final marks submission status. ' . $e->getMessage());
        }
    }
}