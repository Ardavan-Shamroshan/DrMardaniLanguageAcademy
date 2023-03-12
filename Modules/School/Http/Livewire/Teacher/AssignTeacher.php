<?php

namespace Modules\School\Http\Livewire\Teacher;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\School\Entities\AssignedTeacher;
use Modules\School\Http\Requests\Teacher\AssignTeacherRequest;
use Modules\School\Interfaces\CourseInterface;
use Modules\School\Interfaces\SchoolClassInterface;
use Modules\School\Interfaces\SchoolSessionInterface;
use Modules\School\Interfaces\SectionInterface;
use Modules\School\Interfaces\SemesterInterface;
use Modules\School\Repositories\AssignedTeacherRepository;
use Modules\School\Repositories\UserRepository;
use Modules\School\Traits\SchoolSession;

class AssignTeacher extends Component
{
    use LivewireAlert;

    // Use school session trait
    use SchoolSession;

    // to create an instance from model
    public $assign_teacher;

    // to create an instance from model to get all school classes, semesters, courses, sections
    public $school_classes;
    public $semesters;
    public $courses;
    public $sections;
    public $teachers;

    // inject the repositories
    protected $courseRepository;
    protected $semesterRepository;
    protected $sectionRepository;
    protected $schoolClassRepository;
    protected $schoolSessionRepository;
    protected $userRepository;

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
        if (!AssignTeacherRequest::authorize()) {
            back()->with('error', 'Your are not authorized to make this request !');
        }
        return AssignTeacherRequest::rules();
    }

    /**
     * Runs on every request, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     * @param SchoolSessionInterface $schoolSessionRepository
     * @return void
     */
    public function boot(
        SchoolSessionInterface $schoolSessionRepository,
        CourseInterface        $courseRepository,
        SemesterInterface      $semesterRepository,
        SectionInterface       $sectionRepository,
        SchoolClassInterface   $schoolClassRepository
    ) {
        $this->schoolSessionRepository = $schoolSessionRepository;
        $this->semesterRepository = $semesterRepository;
        $this->sectionRepository = $sectionRepository;
        $this->courseRepository = $courseRepository;
        $this->schoolClassRepository = $schoolClassRepository;
    }

    /**
     * Runs once, immediately after the component is instantiated,
     * but before render() is called.
     * This is only called once on initial page load and never called again, even on component refreshes
     * @return void
     */
    public function mount() {
        $this->assign_teacher = new AssignedTeacher;

        // get all teachers
        $this->userRepository = new UserRepository();
        $this->teachers = $this->userRepository->getAllTeachers();

        // class session_id is a hidden and unchangeable input, so this initializes the session_id index of class object
        $this->assign_teacher['session_id'] = $this->getSchoolCurrentSession();
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
        // (when a school class creates in CreateClass.php
        // DOM should be updated to select all new school classes in CreateSection.php select box)
        $this->school_classes = $this->schoolClassRepository->getAllBySession($current_school_session_id);
        $this->sections = $this->sectionRepository->getAllBySession($current_school_session_id);
        $this->semesters = $this->semesterRepository->getAll($current_school_session_id);
        $this->courses = $this->courseRepository->getAll($current_school_session_id);

        $data = [
            'school_classes' => $this->school_classes,
            'sections' => $this->sections,
            'semesters' => $this->semesters,
            'courses' => $this->courses,
        ];
        return view('school::livewire.teacher.assign-teacher', $data);
    }

    /**
     * Will be fired when confirm button is clicked
     * @return void
     */
    public function confirmed() {
        $this->assignTeacher();
    }

    public function submit() {
        $this->alert('question', 'Are you sure?', [
            'text' => 'Assign Teacher',
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
    public function assignTeacher() {
        $inputs = $this->validate()['assign_teacher'];
        try {
            $assignedTeacherRepository = new AssignedTeacherRepository();
            $assignedTeacherRepository->assign($inputs);

            // to refresh given component
            // $this->emit('$refresh');

            return back()->with('success', 'Assigning teacher was successful!');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
