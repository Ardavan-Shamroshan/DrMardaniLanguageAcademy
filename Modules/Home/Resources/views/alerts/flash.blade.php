@if (session()->has('message'))
    <div class="message">
        <a class="delete"></a>
        <div class="message-body">
            <a href="" class="title">{{ session('message') }}</a>
        </div>
    </div>
@endif