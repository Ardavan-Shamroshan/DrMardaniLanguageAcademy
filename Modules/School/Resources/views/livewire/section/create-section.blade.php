<div
        {{-- wire:loading.class="has-loader has-loader-active" --}}
        class="card-grid-item is-raised has-loader" style="text-align: left">
    {{-- <div> --}}
    {{--     <h3>The <code>CreateSection</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}

    <!--Loader-->
    <div class="h-loader-wrapper">
        <div class="loader is-small is-loading"></div>
    </div>

    <h3 class="dark-inverted mb-1">Create Section</h3>

    @include('home::alerts.session-messages')

    <div class="field">
        <form wire:submit.prevent="submit">
            @csrf

            <div
                    wire:dirty.class="has-error"
                    class="control has-validation">

                <input
                        wire:model.debounce.500ms="section.section_name"
                        type="text" class="input is-primary-focus" placeholder="Section Name">
            </div>

            <div
                    wire:dirty.class="has-error"
                    class="control has-validation">

                <input
                        wire:model.debounce.500ms="section.room_no"
                        type="text" class="input is-primary-focus" placeholder="Room No.">
            </div>

            <p class="label title">Assign section to class:</p>
            <div wire:target="section.class_id" wire:dirty.class="has-error" class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select wire:model.debounce.500ms="section.class_id" style="width: 100%">
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
                Save
            </button>
        </form>
    </div>
</div>
