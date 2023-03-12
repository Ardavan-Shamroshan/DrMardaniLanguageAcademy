<?php

namespace Modules\School\Http\Livewire\Semester;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\School\Entities\Semester;
use Modules\School\Http\Requests\Semester\CreateSemesterRequest;
use Modules\School\Interfaces\SchoolSessionInterface;
use Modules\School\Interfaces\SemesterInterface;
use Modules\School\Traits\SchoolSession;

class CreateSemesterForCurrentSession extends Component
{
    use LivewireAlert;
    use SchoolSession;

    // to create an instance from model
    public $semester;

    // inject the repository
    protected $semesterRepository;

    protected $schoolSessionRepository;

    /**
     * Add to event listeners array to register the emit.
     * @var string[]
     */
    protected $listeners = [
        '$refresh',
        'confirmed'
    ];

    /**
     * In short, Livewire provides a $rules property for setting validation rules on a per-component basis,
     * and a $this->validate() method for validating a component's properties using those rules.
     * If you need to define rules dynamically,
     * you can substitute the $rules property for the rules() method on the component
     * @return array|array[]
     */
    protected function rules() {
        if (!CreateSemesterRequest::authorize()) {
            back()->with('error', 'Your are not authorized to make this request !');
        }
        return CreateSemesterRequest::rules();
    }

    /**
     * Runs on every request, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     * @param SemesterInterface $semesterRepository
     * @return void
     */
    public function boot(SemesterInterface $semesterRepository, SchoolSessionInterface $schoolSessionRepository) {
        $this->semesterRepository = $semesterRepository;
        $this->schoolSessionRepository = $schoolSessionRepository;

    }

    /**
     * Runs once, immediately after the component is instantiated,
     * but before render() is called.
     * This is only called once on initial page load and never called again, even on component refreshes
     * @return void
     */
    public function mount() {
        $this->semester = new Semester();

        // semester session_id is a hidden and unchangeable input, so this initializes the session_id index of semester object
        $this->semester['session_id'] = $this->getSchoolCurrentSession();
    }

    /**
     * Runs after any update to the Livewire component's data (Using wire:model, not directly inside PHP)
     * @return void
     */
    public function updated() {
        $this->validate();
    }

    public function render() {
        // // current school session id
        // $current_school_session_id = $this->getSchoolCurrentSession();
        // $data = [
        //     'current_school_session_id' => $current_school_session_id,
        // ];
        return view('school::livewire.semester.create-semester-for-current-session');
    }

    /**
     * Will be fired when confirm button is clicked
     * @return void
     */
    public function confirmed() {
        $this->createSemester();
    }

    public function submit() {
        $this->alert('question', 'Are you sure?', [
            'text' => 'Create Semester',
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
    public function createSemester() {
        $inputs = $this->validate()['semester'];
        $realTimestampStart = substr($inputs['start_date'], 0, 10);
        $inputs['start_date'] = date('Y-m-d H:i', (int)$realTimestampStart);
        $realTimestampStart = substr($inputs['end_date'], 0, 10);
        $inputs['end_date'] = date('Y-m-d H:i', (int)$realTimestampStart);
        try {
            $this->semesterRepository->create($inputs);

            // to refresh given component
            $this->emit('refreshCreateCourse');
            $this->emit('$refresh');

            return back()->with('success', 'Semester creation was successful!');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
