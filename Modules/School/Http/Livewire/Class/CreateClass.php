<?php

namespace Modules\School\Http\Livewire\Class;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\School\Entities\SchoolClass;
use Modules\School\Http\Requests\SchoolClass\CreateClassRequest;
use Modules\School\Interfaces\SchoolClassInterface;
use Modules\School\Interfaces\SchoolSessionInterface;
use Modules\School\Traits\SchoolSession;

class CreateClass extends Component
{
    use LivewireAlert;

    // To authorize actions in Livewire
    use AuthorizesRequests;

    // Use school session trait
    use SchoolSession;

    // to create an instance from model
    public $class;

    // inject the repositories
    protected $schoolSessionRepository;
    protected $schoolClassRepository;

    /**
     * Add to event listeners array to register the emit.
     * @var string[]
     */
    protected $listeners = [
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
        if (!CreateClassRequest::authorize()) {
            back()->with('error', 'Your are not authorized to make this request !');
        }
        return CreateClassRequest::rules();
    }

    /**
     * Runs on every request, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     * @param SchoolSessionInterface $schoolSessionRepository
     * @return void
     */
    public function boot(SchoolSessionInterface $schoolSessionRepository, SchoolClassInterface $schoolClassRepository) {
        // check the privilege
        $this->authorize('view classes');
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
        $this->class = new SchoolClass;

        // class session_id is a hidden and unchangeable input, so this initializes the session_id index of class object
        $this->class['session_id'] = $this->getSchoolCurrentSession();
    }

    /**
     * Runs after any update to the Livewire component's data (Using wire:model, not directly inside PHP)
     * @return void
     */
    public function updated() {

        $this->validate();
    }

    public function render() {
        return view('school::livewire.class.create-class');
    }

    /**
     * Will be fired when confirm button is clicked
     * @return void
     */
    public function confirmed() {
        $this->createClass();
    }

    public function submit() {
        $this->alert('question', 'Are you sure?', [
            'text' => 'Create Class',
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
    public function createClass() {
        $inputs = $this->validate()['class'];
        try {
            $this->schoolClassRepository->create($inputs);

            // to refresh given component
            $this->emit('$refresh');

            return back()->with('success', 'Class creation was successful!');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
