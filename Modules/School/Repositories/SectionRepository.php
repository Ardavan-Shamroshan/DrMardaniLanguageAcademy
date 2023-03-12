<?php

namespace Modules\School\Repositories;

use Modules\School\Entities\Section;
use Modules\School\Interfaces\SectionInterface;

class SectionRepository implements SectionInterface {
    public function create($request) {
        try {
            Section::query()->create($request);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create School Section. '.$e->getMessage());
        }
    }

    public function getAllBySession($session_id) {
        return Section::query()->where('session_id', $session_id)->get();
    }

    public function getAllByClassId($class_id) {
        return Section::query()->where('class_id', $class_id)->get();
    }

    public function findById($section_id) {
        return Section::query()->find($section_id);
    }

    public function update($request) {
        try {
            Section::query()->find($request->section_id)->update([
                'section_name'  => $request->section_name,
                'room_no'       => $request->room_no,
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Failed to update School Section. '.$e->getMessage());
        }
    }
}