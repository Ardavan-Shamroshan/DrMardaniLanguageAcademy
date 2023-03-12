<?php

namespace Modules\School\Http\Livewire\Course;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Modules\School\Entities\Course;
use Modules\School\Http\Requests\Course\CreateCourseRequest;
use Modules\School\Interfaces\CourseInterface;
use Modules\School\Interfaces\SchoolClassInterface;
use Modules\School\Interfaces\SchoolSessionInterface;
use Modules\School\Interfaces\SemesterInterface;
use Modules\School\Traits\SchoolSession;

class CreateCourse extends Component
{
    use LivewireAlert;

    // Use school session trait
    use SchoolSession;

    // to create an instance from model
    public $course;

    // to create an instance from model to get all school classes, semesters
    public $school_classes;
    public $semesters;

    // inject the repositories
    protected $schoolCourseRepository;
    protected $semesterRepository;
    protected $schoolClassRepository;
    protected $schoolSessionRepository;


    /**
     * Add to event listeners array to register the emit.
     * @var string[]
     */
    protected $listeners = [
        'refreshCreateCourse' => '$refresh',
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
        if (!CreateCourseRequest::authorize()) {
            back()->with('error', 'Your are not authorized to make this request !');
        }
        return CreateCourseRequest::rules();
    }

    /**
     * Runs on every request, immediately after the component is instantiated,
     * but before any other lifecycle methods are called
     * @param SchoolSessionInterface $schoolSessionRepository
     * @return void
     */
    public function boot(SchoolSessionInterface $schoolSessionRepository, CourseInterface $schoolCourseRepository, SemesterInterface $semesterRepository, SchoolClassInterface $schoolClassRepository) {
        $this->schoolSessionRepository = $schoolSessionRepository;
        $this->semesterRepository = $semesterRepository;
        $this->schoolCourseRepository = $schoolCourseRepository;
        $this->schoolClassRepository = $schoolClassRepository;
    }

    /**
     * Runs once, immediately after the component is instantiated,
     * but before render() is called.
     * This is only called once on initial page load and never called again, even on component refreshes
     * @return void
     */
    public function mount() {
        $this->course = new Course;

        // class session_id is a hidden and unchangeable input, so this initializes the session_id index of class object
        $this->course['session_id'] = $this->getSchoolCurrentSession();
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
        $this->semesters = $this->semesterRepository->getAll($current_school_session_id);
        $data = [
            'school_classes' => $this->school_classes,
            'semesters' => $this->semesters,
        ];
        return view('school::livewire.course.create-course', $data);
    }

    /**
     * Will be fired when confirm button is clicked
     * @return void
     */
    public function confirmed() {
        $this->createCourse();
    }

    public function submit() {
        $this->alert('question', 'Are you sure?', [
            'text' => 'Create Course',
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
    public function createCourse() {
        $inputs = $this->validate()['course'];
        try {
            $this->schoolCourseRepository->create($inputs);

            // to refresh given component
            $this->emit('$refresh');

            return back()->with('success', 'Course creation was successful!');
        } catch (\Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
