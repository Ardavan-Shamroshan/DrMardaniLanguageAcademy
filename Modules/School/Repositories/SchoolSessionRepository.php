<?php

namespace Modules\School\Repositories;

use Modules\School\Entities\SchoolSession;
use Modules\School\Interfaces\SchoolSessionInterface;

class SchoolSessionRepository implements SchoolSessionInterface
{
    public function getLatestSession() {
        $school_session = SchoolSession::query()->latest()->first();
        if ($school_session) {
            return $school_session;
        } else {
            return (object)['id' => 0];
        }
    }

    public function getAll() {
        return SchoolSession::all();
    }

    public function getPreviousSession() {
        $lastTwoSessions = SchoolSession::query()
            ->orderBy('id', 'desc')
            ->take(2)
            ->get()
            ->toArray();
        return (count($lastTwoSessions) < 2) ? [] : $lastTwoSessions[1];
    }

    public function create($request) {
        try {
            SchoolSession::query()->create($request);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create School Session. ' . $e->getMessage());
        }
    }

    public function browse($request) {
        try {
            // if session 'browse_session_id' set and request's session_id equals to the latest session id
            // forget the 'browse_session_id', 'browse_session_name' sessions
            if (session()->has('browse_session_id') && ($request['session_id'] == $this->getLatestSession()->id)) {
                session()->forget(['browse_session_id', 'browse_session_name']);
            } else {
                session(['browse_session_id' => $request['session_id']]);
                session(['browse_session_name' => $this->getSessionById($request['session_id'])->session_name]);
            }
        } catch (\Exception $e) {
            throw new \Exception('Failed to set School Session for browsing. ' . $e->getMessage());
        }
    }

    public function getSessionById($id) {
        return SchoolSession::query()->find($id);
    }
}