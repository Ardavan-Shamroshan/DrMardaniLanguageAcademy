<?php

namespace Modules\School\Http\Livewire\Session;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\School\Entities\SchoolSession;
use Modules\School\Http\Requests\SchoolSession\CreateSessionRequest;
use Modules\School\Interfaces\SchoolSessionInterface;

class CreateSession extends Component
{
    use LivewireAlert;

    // to create an instance from model
    public $session;

    // inject the repository
    protected $schoolSessionRepository;

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
        if (!CreateSessionRequest::authorize()) {
            back()->with('error', 'Your are not authorized to make this request !');
        }
        return CreateSessionRequest::rules();
    }

    /**
     * Runs on every request, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     * @param SchoolSessionInterface $schoolSessionRepository
     * @return void
     */
    public function boot(SchoolSessionInterface $schoolSessionRepository) {
        $this->schoolSessionRepository = $schoolSessionRepository;
    }

    /**
     * Runs once, immediately after the component is instantiated,
     * but before render() is called.
     * This is only called once on initial page load and never called again, even on component refreshes
     * @return void
     */
    public function mount() {
        $this->session = new SchoolSession;
    }

    /**
     * Runs after any update to the Livewire component's data (Using wire:model, not directly inside PHP)
     * @return void
     */
    public function updated() {

        $this->validate();
    }

    public function render() {
        return view('school::livewire.session.create-session');
    }


    /**
     * Will be fired when confirm button is clicked
     * @return void
     */
    public function confirmed() {
        $this->createSession();
    }

    public function submit() {
        $this->alert('question', 'Are you sure?', [
            'text' => 'Create Session',
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
    public function createSession() {
        $inputs = $this->validate();
        try {
            $this->schoolSessionRepository->create($inputs['session']);

            // to refresh given component
            $this->emit('$refresh');

            back()->with('success', 'Session creation was successful!');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
