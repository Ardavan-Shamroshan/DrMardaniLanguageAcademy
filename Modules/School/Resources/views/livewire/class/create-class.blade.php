<div class="card-grid-item is-raised" style="text-align: left">
    {{-- <div> --}}
    {{--     <h3>The <code>CreateClass</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}

    <h3 class="dark-inverted mb-1">Create Class</h3>

    @include('home::alerts.session-messages')

    <div class="field">
        <form wire:submit.prevent="submit">
            @csrf

            <div
                    wire:dirty.class="has-error"
                    class="control has-validation">

                <input
                        wire:model.debounce.500ms="class.class_name"
                        type="text" class="input is-primary-focus" placeholder="Class Name">
            </div>

            @error('class.class_name')
            <p class="help danger-text label">{{ $message }}</p>
            @enderror

            <button
                    wire:loading.attr="disabled"
                    wire:loading.class="is-loading no-click"
                    wire:loading.class.remove="is-outlined"
                    @error('class.class_name') disabled @enderror type="submit" class="button is-primary is-outlined mt-5 h-action">
                Create
            </button>
        </form>
    </div>
</div>