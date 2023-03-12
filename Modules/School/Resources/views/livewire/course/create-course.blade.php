<div class="card-grid-item is-raised" style="text-align: left">
    {{-- <div> --}}
    {{--     <h3>The <code>CreateCourse</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}

    <h3 class="dark-inverted mb-1">Create Course</h3>

    @include('home::alerts.session-messages')

    <div class="field">
        <form wire:submit.prevent="submit">
            @csrf
            <div
                    wire:dirty.class="has-error"
                    class="control has-validation">
                <input
                        wire:model.debounce.500ms="course.course_name"
                        type="text" class="input is-primary-focus" placeholder="Course Name">
            </div>

            <p class="label title">Assign to Semester : <span class="text-danger">*</span></p>
            <div wire:target="course.semester_id" wire:dirty.class="has-error" class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select wire:model.debounce.500ms="course.semester_id" style="width: 100%">
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
            <div wire:target="course.class_id" wire:dirty.class="has-error" class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select wire:model.debounce.500ms="course.class_id" style="width: 100%">
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

