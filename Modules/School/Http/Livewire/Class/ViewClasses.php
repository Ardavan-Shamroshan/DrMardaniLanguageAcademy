<?php

namespace Modules\School\Http\Livewire\Class;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Modules\School\Interfaces\SchoolClassInterface;
use Modules\School\Interfaces\SchoolSessionInterface;
use Modules\School\Traits\SchoolSession;

class ViewClasses extends Component
{
    // To authorize actions in Livewire
    use AuthorizesRequests;

    // use school session trait
    use SchoolSession;

    // inject the repositories
    protected $schoolClassRepository;
    protected $schoolSessionRepository;

    /**
     * Runs on every request, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     * @param SchoolSessionInterface $schoolSessionRepository
     * @return void
     */
    public function boot(SchoolSessionInterface $schoolSessionRepository, SchoolClassInterface $schoolClassRepository) {
        // check the privilege
        $this->authorize('view classes');
        $this->schoolClassRepository = $schoolClassRepository;
        $this->schoolSessionRepository = $schoolSessionRepository;
    }


    public function render() {
        $current_school_session_id = $this->getSchoolCurrentSession();
        $data = $this->schoolClassRepository->getClassesAndSections($current_school_session_id);

        return view('school::livewire.class.view-classes', $data)
            ->layout('home::layouts.master');
    }
}
