<?php

namespace Modules\School\Http\Livewire\Session;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\School\Entities\SchoolSession;
use Modules\School\Http\Requests\SchoolSession\BrowseSessionRequest;
use Modules\School\Interfaces\SchoolSessionInterface;

class BrowseBySession extends Component
{
    use LivewireAlert;

    // to create an instance from model
    public $session;

    // to create an instance from model to get all school sessions
    public $school_sessions;

    // inject the repository
    protected $schoolSessionRepository;


    // to refresh this component
    protected $listeners = [
        '$refresh',
        'confirmed',
        'clearSessionConfirmed'
    ];

    /**
     * In short, Livewire provides a $rules property for setting validation rules on a per-component basis,
     * and a $this->validate() method for validating a component's properties using those rules.
     * If you need to define rules dynamically,
     * you can substitute the $rules property for the rules() method on the component
     * @return array|array[]
     */
    protected function rules() {
        if (!BrowseSessionRequest::authorize()) {
            back()->with('error', 'Your are not authorized to make this request !');
        }
        return BrowseSessionRequest::rules();
    }

    /**
     * Runs on every request, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     * @param SchoolSessionInterface $schoolSessionRepository
     * @return void
     */
    public function boot(SchoolSessionInterface $schoolSessionRepository) {
        $this->schoolSessionRepository = $schoolSessionRepository;
        $this->session = new SchoolSession;
    }

    /**
     * Runs once, immediately after the component is instantiated,
     * but before render() is called.
     * This is only called once on initial page load and never called again, even on component refreshes
     * @return void
     */
    // public function mount() {
    //
    // }

    /**
     * Runs after any update to the Livewire component's data (Using wire:model, not directly inside PHP)
     * @return void
     */
    public function updated() {

        $this->validate();
    }

    public function render() {
        // to render and realtime update school sessions
        // (when a school session creates in CreateSession.php
        // DOM should be updated to select all new school sessions in BrowseBySession.php select box)
        $this->school_sessions = $this->schoolSessionRepository->getAll();
        return view('school::livewire.session.browse-by-session', ['school_sessions' => $this->school_sessions]);
    }

    /**
     * Will be fired when confirm button is clicked
     * @return void
     */
    public function confirmed() {
        return to_route('admin');
    }   

    /**
     * Will be fired when clear session confirmed button is clicked
     * @return void
     */
    public function clearSessionConfirmed($data) {
        // if $data is empty
        if (!$data['value']) {
            return back()->with('error', 'confirmation is required to clear session');
        }
        // if typed phrase does not match to given phrase
        if (auth()->user()->email != $data['value']) {
            return back()->with('error', 'confirmation does not match to the given phrase');
        }

        $this->clearSession();
    }

    // Browse Session
    public function browseSession() {
        $inputs = $this->validate();
        try {
            $this->schoolSessionRepository->browse($inputs['session']);

            $this->emit('$refresh');

            $this->alert('question', 'To apply changes, refresh the page', [
                'timer' => 10000,
                'showDenyButton' => true,
                'denyButtonText' => 'Refresh later',
                'showConfirmButton' => true,
                'confirmButtonText' => 'Refresh now',
                'onConfirmed' => 'confirmed'
            ]);

            return back()->with('success', 'Browsing session set was successful!');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }

    public function submit() {
        $this->alert('warning', 'Are you absolutely sure?', [
            'text' => 'This action cannot be undone. This will permanently delete the Sessions, Please type `' . auth()->user()->email . '` to confirm.',
            'input' => 'text',
            'position' => 'center',
            'toast' => false,
            'timer' => null,
            'showConfirmButton' => true,
            'confirmButtonText' => 'I understand the consequences, clear Sessions',
            'onConfirmed' => 'clearSessionConfirmed',
        ]);
    }

    // Clear Session
    public function clearSession() {
        // if session has been set
        if (session()->has('browse_session_id')) {
            session()->forget(['browse_session_id', 'browse_session_name']);
            back()->with('success', 'Session cleared successfully');
            $this->alert('question', 'To apply changes, refresh the page', [
                'timer' => 10000,
                'showDenyButton' => true,
                'denyButtonText' => 'Refresh later',
                'showConfirmButton' => true,
                'confirmButtonText' => 'Refresh now',
                'onConfirmed' => 'confirmed'
            ]);
        } else
            return back()->with('error', 'No Session has been set');
    }
}
