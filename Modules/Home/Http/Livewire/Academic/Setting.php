<?php

namespace Modules\Home\Http\Livewire\Academic;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Modules\School\Interfaces\SchoolSessionInterface;
use Modules\School\Traits\SchoolSession;

class Setting extends Component
{
    // To authorize actions in Livewire
    use AuthorizesRequests;

    // use school session trait
    use SchoolSession;

    protected$schoolSessionRepository;

    public function boot(SchoolSessionInterface $schoolSessionRepository) {
        // check the privilege
        $this->authorize('view academic settings');
        $this->schoolSessionRepository = $schoolSessionRepository;
    }

    public function render() {
        // current school session id
        $current_school_session_id = $this->getSchoolCurrentSession();

        // latest school session
        $latest_school_session = $this->schoolSessionRepository->getLatestSession();

        $data = [
            'current_school_session_id' => $current_school_session_id,
            'latest_school_session_id' => $latest_school_session->id
        ];

        return view('home::livewire.academic.setting', $data)
            ->layout('home::layouts.master');
    }
}
