<div class="card-grid-item is-raised" style="text-align: left">
    {{-- <div> --}}
    {{--     <h3>The <code>AssignTeacher</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}

    <h3 class="dark-inverted mb-1">Assign Teacher</h3>

    @include('home::alerts.session-messages')

    <div class="field">
        <form wire:submit.prevent="submit">
            @csrf

            <p class="label title">Select Teacher : <span class="text-danger">*</span></p>
            <div wire:target="assign_teacher.teacher_id" wire:dirty.class="has-error" class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select wire:model.debounce.500ms="assign_teacher.teacher_id" style="width: 100%">
                        @isset($teachers)
                            <option selected>Select a "Teacher" to assign</option>
                            @forelse ($teachers as $teacher)
                                <option class="subtitle" value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                            @empty
                                <option selected>There is no "Teacher" to assign</option>
                            @endforelse
                        @endisset
                    </select>
                </div>
            </div>

            <p class="label title">Assign to Semester : <span class="text-danger">*</span></p>
            <div wire:target="assign_teacher.semester_id" wire:dirty.class="has-error" class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select wire:model.debounce.500ms="assign_teacher.semester_id" style="width: 100%">
                        @isset($semesters)
                            <option selected>Select a "Semester" to assign</option>
                            @forelse ($semesters as $semester)
                                <option class="subtitle" value="{{ $semester->id }}">{{ $semester->semester_name }}</option>
                            @empty
                                <option selected>There is no "Semester" to assign</option>
                            @endforelse
                        @endisset
                    </select>
                </div>
            </div>

            <p class="label title">Assign to Class : <span class="text-danger">*</span></p>
            <div wire:target="assign_teacher.class_id" wire:dirty.class="has-error" class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select wire:model.debounce.500ms="assign_teacher.class_id" style="width: 100%">
                        @isset($school_classes)
                            <option selected>Select a "Class" to assign</option>
                            @forelse ($school_classes as $school_class)
                                <option class="subtitle" value="{{ $school_class->id }}">{{ $school_class->class_name }}</option>
                            @empty
                                <option selected>There is no "Class" to assign</option>
                            @endforelse
                        @endisset
                    </select>
                </div>
            </div>

            <p class="label title">Assign to Section : <span class="text-danger">*</span></p>
            <div wire:target="assign_teacher.section_id" wire:dirty.class="has-error" class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select wire:model.debounce.500ms="assign_teacher.section_id" style="width: 100%">
                        @isset($sections)
                            <option selected>Select a "Section" to assign</option>
                            @forelse ($sections as $section)
                                <option class="subtitle" value="{{ $section->id }}">{{ $section->section_name }}</option>
                            @empty
                                <option selected>There is no "Section" to assign</option>
                            @endforelse
                        @endisset
                    </select>
                </div>
            </div>

            <p class="label title">Assign to Course : <span class="text-danger">*</span></p>
            <div wire:target="assign_teacher.course_id" wire:dirty.class="has-error" class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select wire:model.debounce.500ms="assign_teacher.course_id" style="width: 100%">
                        @isset($courses)
                            <option selected>Select a "Course" to assign</option>
                            @forelse ($courses as $course)
                                <option class="subtitle" value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @empty
                                <option selected>There is no "Course" to assign</option>
                            @endforelse
                        @endisset
                    </select>
                </div>
            </div>


            @include('home::alerts.validation')

            <button
                    wire:loading.attr="disabled"
                    wire:loading.class="is-loading no-click"
                    wire:loading.class.remove="is-outlined"
                    @disabled($errors->any()) type="submit" class="button is-primary is-outlined mt-5 h-action">
                Create
            </button>
        </form>
    </div>
</div>