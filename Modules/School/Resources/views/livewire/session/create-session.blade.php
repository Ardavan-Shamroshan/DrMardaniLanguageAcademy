<div class="card-grid-item is-raised" style="text-align: left">
    {{-- <div> --}}
    {{--     <h3>The <code>CreateSession</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}

    <h3 class="dark-inverted mb-1">Create Session</h3>
    <div class="description font-size-bold info-text">
        <span>Create one Session per academic year. Last created session will be considered as the latest academic session.</span>
    </div>

    @include('home::alerts.session-messages')

    <div class="field">
        <form wire:submit.prevent="submit">
            @csrf

            <div
                    wire:target="session.session_name"
                    wire:dirty.class="has-error"
                    class="control has-validation">

                <input
                        wire:model.debounce.500ms="session.session_name"
                        type="text" class="input is-primary-focus" placeholder="2021 - 2022" required>
            </div>

            @error('session.session_name')
            <p class="help danger-text label">{{ $message }}</p>
            @enderror

            <button
                    wire:loading.attr="disabled"
                    wire:loading.class="is-loading no-click"
                    wire:loading.class.remove="is-outlined"
                    @error('session.session_name') disabled @enderror type="submit" class="button is-primary is-outlined mt-5 h-action">
                Create
            </button>
        </form>
    </div>
</div>
