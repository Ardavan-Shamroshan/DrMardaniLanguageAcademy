<?php

namespace Modules\School\Http\Livewire\Section;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\School\Entities\Section;
use Modules\School\Http\Requests\Section\CreateSectionRequest;
use Modules\School\Interfaces\CourseInterface;
use Modules\School\Interfaces\SchoolClassInterface;
use Modules\School\Interfaces\SchoolSessionInterface;
use Modules\School\Interfaces\SectionInterface;
use Modules\School\Traits\SchoolSession;

class CreateSection extends Component
{
    use LivewireAlert;

    // Use school session trait
    use SchoolSession;

    // to create an instance from model
    public $section;

    // to create an instance from model to get all school classes
    public $school_classes;

    // inject the repositories
    protected $schoolSectionRepository;
    protected $schoolSessionRepository;
    protected $schoolClassRepository;


    /**
     * Add to event listeners array to register the emit.
     * @var string[]
     */
    protected $listeners = [
        '$refresh',
        'confirmed'
    ];
    protected function getListeners()
    {
        return [
            '$refresh',
            'confirmed'
        ];
    }

    /**
     * In short, Livewire provides a $rules property for setting validation rules on a per-component basis,
     * and a $this->validate() method for validating a component's properties using those rules.
     * If you need to define rules dynamically,
     * you can substitute the $rules property for the rules() method on the component
     * @return array|array[]
     */
    protected function rules() {
        if (!CreateSectionRequest::authorize()) {
            back()->with('error', 'Your are not authorized to make this request !');
        }
        return CreateSectionRequest::rules();
    }

    /**
     * Runs on every request, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     * @param SchoolSessionInterface $schoolSessionRepository
     * @return void
     */
    public function boot(SchoolSessionInterface $schoolSessionRepository, SectionInterface $schoolSectionRepository, SchoolClassInterface $schoolClassRepository) {
        $this->schoolSectionRepository = $schoolSectionRepository;
        $this->schoolSessionRepository = $schoolSessionRepository;
        $this->schoolClassRepository = $schoolClassRepository;
    }

    /**
     * Runs once, immediately after the component is instantiated,
     * but before render() is called.
     * This is only called once on initial page load and never called again, even on component refreshes
     * @return void
     */
    public function mount() {
        $this->section = new Section();

        // class session_id is a hidden and unchangeable input, so this initializes the session_id index of class object
        $this->section['session_id'] = $this->getSchoolCurrentSession();
    }

    /**
     * Runs after any update to the Livewire component's data (Using wire:model, not directly inside PHP)
     * @return void
     */
    public function updated() {
        $this->validate();
    }

    public function render() {
        // current school session id
        $current_school_session_id = $this->getSchoolCurrentSession();

        // to render and realtime update school sessions
        // (when a school session creates in CreateSession.php
        // DOM should be updated to select all new school sessions in BrowseBySession.php select box)
        $this->school_classes = $this->schoolClassRepository->getAllBySession($current_school_session_id);
        $data = [
          'school_classes' => $this->school_classes,
        ];
        return view('school::livewire.section.create-section', $data);
    }

    /**
     * Will be fired when confirm button is clicked
     * @return void
     */
    public function confirmed() {
        $this->createSection();
    }

    public function submit() {
        $this->alert('question', 'Are you sure?', [
            'text' => 'Create Section',
            'toast' => false,
            'position' => 'center',
            'timer' => null,
            'timerProgressBar' => true,
            'showDenyButton' => true,
            'showConfirmButton' => true,
            'confirmButtonText' => 'Yes',
            'onConfirmed' => 'confirmed'
        ]);
    }

    // Create Session
    public function createSection() {
        $inputs = $this->validate()['section'];
        try {
            $this->schoolSectionRepository->create($inputs);

            // to refresh given component
            $this->emit('$refresh');

            return back()->with('success', 'Section creation was successful!');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
