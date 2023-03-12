<?php

namespace Modules\School\Http\Livewire\Mark;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\Home\Entities\AcademicSetting;
use Modules\School\Interfaces\AcademicSettingInterface;

class UpdateFinalMarksSubmissionStatus extends Component
{
    use LivewireAlert;

    // to create an instance from model
    public $marks_submission_status;
    // inject the repository
    protected $academicSettingRepository;

    protected $rules = [
        'marks_submission_status' => ['sometimes']
    ];

    /**
     * Add to event listeners array to register the emit.
     * @var string[]
     */
    protected $listeners = [
        'confirmed'
    ];

    /**
     * Runs on every request, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     * @param SchoolSessionInterface $schoolSessionRepository
     * @return void
     */
    public function boot(AcademicSettingInterface $academicSettingRepository) {
        $this->academicSettingRepository = $academicSettingRepository;
    }

    /**
     * Runs once, immediately after the component is instantiated,
     * but before render() is called.
     * This is only called once on initial page load and never called again, even on component refreshes
     * @return void
     */
    public function mount() {
        $this->marks_submission_status = $this->academicSettingRepository->getAcademicSetting()->marks_submission_status;
        $this->marks_submission_status = $this->marks_submission_status == 'off' ? false : true;
    }

    /**
     * Runs after any update to the Livewire component's data (Using wire:model, not directly inside PHP)
     * @return void
     */
    public function updated() {

        $this->validate();
    }

    public function render() {
        return view('school::livewire.mark.update-final-marks-submission-status');
    }

    /**
     * Will be fired when confirm button is clicked
     * @return void
     */
    public function confirmed() {
        $this->updateFinalMarksSubmissionStatus();
    }

    public function submit() {
        $inputs = $this->validate()['marks_submission_status'];
        $status = $inputs == false ? 'off' : 'on';

        $this->alert('question', 'Are you sure', [
            'text' => "To turn $status the marks submission?",
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

    // Update final marks submission status
    public function updateFinalMarksSubmissionStatus() {
        $inputs = $this->validate();

        try {
            $this->academicSettingRepository->updateFinalMarksSubmissionStatus($inputs);

            return back()->with('success', 'Final marks submission status update was successful!');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
