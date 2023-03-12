{{--success--}}
@if(session('success'))
    <div class="message is-success">
        <a class="delete"></a>
        <div class="is-6 message-body subtitle">
            {{ session('success') }}
        </div>
    </div>
@endif

{{--error--}}
@if(session('error'))
    <div class="message is-danger">
        <a class="delete"></a>
        <div class="is-6 message-body subtitle">
            {{ session('error') }}
        </div>
    </div>
@endif
