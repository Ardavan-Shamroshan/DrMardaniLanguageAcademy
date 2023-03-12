<div class="card-grid-item is-raised p-5" style="text-align: left">
    {{-- <div> --}}
    {{--     <h3>The <code>UpdateFinalMarksSubmissionStatus</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}


    <h3 class="dark-inverted mb-1">Allow Final Marks Submission</h3>
    <div class="description font-size-bold danger-text">
        <i data-feather="alert-circle"></i>
        <span> Do not change the type in the middle of a Semester.</span>
    </div>

    <div class="description font-size-bold info-text">
        <span> Usually teachers are allowed to submit final marks just before the end of a "Semester".</span>
    </div>

    @include('home::alerts.session-messages')

    <div class="field">
        <form wire:submit.prevent="submit">
            @csrf
            <div
                    wire:dirty.class="has-error"
                    class="control has-validation">
                <label class="form-switch is-success">
                    <input
                            wire:model="marks_submission_status"
                            type="checkbox" class="is-switch">
                    <i></i>
                </label>
            </div>
            @error('marks_submission_status')
            <p class="help danger-text label">{{ $message }}</p>
            @enderror

            <button
                    wire:loading.attr="disabled"
                    wire:loading.class="is-loading no-click"
                    wire:loading.class.remove="is-outlined"
                    @error('marks_submission_status') disabled @enderror type="submit" class="button is-primary is-outlined mt-5 h-action">
                Save
            </button>
        </form>
    </div>
</div>
