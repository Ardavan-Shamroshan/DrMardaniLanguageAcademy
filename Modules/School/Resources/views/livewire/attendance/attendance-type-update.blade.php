<div class="card-grid-item is-raised" style="text-align: left">
    {{-- <div> --}}
    {{--     <h3>The <code>AttendanceTypeUpdate</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}

    <h3 class="dark-inverted mb-1">Attendance Type</h3>
    <div class="description font-size-bold danger-text">
        <i data-feather="alert-circle"></i>
        <span> Do not change the type in the middle of a Semester.</span>
    </div>

    @include('home::alerts.session-messages')

    <div class="field">
        <form wire:submit.prevent="submit">
            @csrf

            <div
                    wire:dirty.class="has-error"
                    class="control has-validation">
                <label class="radio is-outlined is-primary">
                    <input
                            wire:model.defer="setting.attendance_type"
                            wire:key="section"
                            value="section"
                            type="radio" name="outlined_radio">
                    <span></span>
                    Attendance by Section<span class="is-info mx-2 tag title">default</span>
                </label>
                <label class="radio is-outlined is-primary">
                    <input
                            wire:model.defer="setting.attendance_type"
                            wire:key="course"
                            value="course"
                            type="radio" name="outlined_radio">
                    <span></span>
                    Attendance by Course
                </label>

            </div>

            @error('setting.attendance_type')
            <p class="help danger-text label">{{ $message }}</p>
            @enderror

            <button
                    wire:loading.attr="disabled"
                    wire:loading.class="is-loading no-click"
                    wire:loading.class.remove="is-outlined"
                    @error('setting.attendance_type') disabled @enderror type="submit" class="button is-primary is-outlined mt-5 h-action">
                Save
            </button>
        </form>
    </div>
</div>