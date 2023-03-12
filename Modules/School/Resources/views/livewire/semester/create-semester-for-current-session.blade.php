@section('head-tag')
    <link rel="stylesheet" href="{{ asset('modules/home/assets/jalalidatepicker/persian-datepicker.min.css') }}">
@endsection
<div class="card-grid-item is-raised" style="text-align: left">
    {{-- <div> --}}
    {{--     <h3>The <code>CreateSemesterForCurrentSession</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}

    <h3 class="dark-inverted mb-1">Create Semester for Current Session</h3>

    @include('home::alerts.session-messages')

    <div class="field">
        <form wire:submit.prevent="submit">
            @csrf
            <div
                    wire:dirty.class="has-error"
                    class="control has-validation">

                <label class="label title">Semester name <span class="text-danger">*</span></label>
                <input
                        wire:model.debounce.500ms="semester.semester_name"
                        type="text" class="input is-primary-focus" placeholder="First Semester" required>
            </div>

            <div
                    wire:dirty.class="has-error"
                    class="control has-validation">
                <label class="label title">Starts <span class="text-danger">*</span></label>
                <input
                        wire:model.debounce.500ms="semester.start_date"
                        type="hidden" name="start_date" id="start_date" class="input is-primary-focus">
                <input
                        wire:model.debounce.500ms="semester.start_date"
                        type="text" id="start_date_view" class="input is-primary-focus" placeholder="Starts" required>
            </div>

            <div
                    wire:dirty.class="has-error"
                    class="control has-validation">
                <label class="label title">Ends <span class="text-danger">*</span></label>
                <input
                        wire:model.debounce.500ms="semester.end_date"
                        type="hidden" name="end_date" id="end_date" class="input is-primary-focus">
                <input
                        wire:model.debounce.500ms="semester.end_date"
                        type="text" id="end_date_view" class="input is-primary-focus" placeholder="Ends" required>
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
@section('script')
    <script src="{{ asset('modules/home/assets/jalalidatepicker/persian-date.min.js') }}"></script>
    <script src="{{ asset('modules/home/assets/jalalidatepicker/persian-datepicker.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#start_date_view').persianDatepicker({
                format: 'YYYY/MM/DD',
                altField: '#start_date',
                calendar: {
                    persian: {
                        locale: 'en'
                    }
                },
                onSelect: function (start_date) {
                    @this.
                    set('semester.start_date', start_date);
                }
            });
            $('#end_date_view').persianDatepicker({
                format: 'YYYY/MM/DD',
                altField: '#end_date',
                calendar: {
                    persian: {
                        locale: 'en'
                    }
                },
                onSelect: function (end_date) {
                    @this.
                    set('semester.end_date', end_date);
                }
            })
        });
    </script>
@endsection