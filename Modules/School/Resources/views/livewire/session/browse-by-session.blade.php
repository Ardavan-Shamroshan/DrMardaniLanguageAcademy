<div class="card-grid-item is-raised" style="text-align: left">
    {{-- <div> --}}
    {{--     <h3>The <code>BrowseBySession</code> livewire component is loaded from the <code>School</code> module.</h3> --}}
    {{-- </div> --}}

    <h3 class="dark-inverted mb-1">Browse by Session</h3>
    <div class="description font-size-bold info-text">
        <span>Only use this when you want to browse data from previous Sessions.</span>
    </div>

    @include('home::alerts.session-messages')
    @include('home::alerts.flash')

    <div class="field">
        <form wire:submit.prevent="browseSession">
            @csrf
            <p class="label title">Select "Session" to browse by:</p>
            <div wire:target="session.session_id" wire:dirty.class="has-error" class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select wire:model.debounce.500ms="session.session_id" style="width: 100%">
                        @isset($school_sessions)
                            <option selected>Select a "Session" to browse by</option>
                            @forelse ($school_sessions as $school_session)
                                <option class="subtitle" value="{{ $school_session->id }}">{{ $school_session->session_name }}</option>
                            @empty
                                <option selected>There is no "Session" to browse by</option>
                            @endforelse
                        @endisset
                    </select>
                </div>
            </div>

            @error('session.session_id')
            <p class="help danger-text label">{{ $message }}</p>
            @enderror

            <button
                    wire:target="browseSession,session.session_id"
                    wire:loading.attr="disabled"
                    wire:loading.class="is-loading no-click"
                    wire:loading.class.remove="is-outlined"
                    @error('session.session_id') disabled @enderror type="submit" class="button is-primary is-outlined mt-5 h-action">
                <span wire:target="browseSession,,session.session_id">Set</span>
            </button>
        </form>

        @if(session('browse_session_id'))
            <button
                    wire:target="clearSession,submit"
                    wire:click.prevent="submit"
                    wire:loading.attr="disabled"
                    wire:loading.class.remove="is-outlined"
                    type="button" class="button is-danger is-outlined mt-5 h-action">

                <span wire:target="clearSession,submit">Clear Session</span>
                <span
                        wire:loading
                        wire:target="clearSession,submit"
                        class="loader is-small is-loading mx-1"></span>
            </button>
        @endif
    </div>
</div>