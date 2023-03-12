<?php

namespace Modules\School\Http\Livewire\Attendance;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\Home\Entities\AcademicSetting;
use Modules\School\Http\Requests\Attendance\AttendanceTypeUpdateRequest;
use Modules\School\Interfaces\AcademicSettingInterface;

class AttendanceTypeUpdate extends Component
{
    use LivewireAlert;

    // to create an instance from model
    public AcademicSetting $setting;

    // inject the repository
    protected $academicSettingRepository;
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
        if (!AttendanceTypeUpdateRequest::authorize()) {
            back()->with('error', 'Your are not authorized to make this request !');
        }
        return AttendanceTypeUpdateRequest::rules();
    }

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
        $this->setting = $this->academicSettingRepository->getAcademicSetting();
    }

    /**
     * Runs after any update to the Livewire component's data (Using wire:model, not directly inside PHP)
     * @return void
     */
    public function updated() {

        $this->validate();
    }

    public function render() {
        return view('school::livewire.attendance.attendance-type-update');
    }

    /**
     * Will be fired when confirm button is clicked
     * @return void
     */
    public function confirmed() {
        $this->updateAttendanceType();
    }

    public function submit() {
        $inputs = $this->validate()['setting'];

        $this->alert('question', 'Are you sure', [
            'text' => 'Change semester attendance by to, ' . $inputs['attendance_type'] . '?',
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


    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAttendanceType() {
        $inputs = $this->validate()['setting'];
        try {
            $this->academicSettingRepository->updateAttendanceType($inputs);

            return back()->with('success', 'Attendance type update was successful!');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
