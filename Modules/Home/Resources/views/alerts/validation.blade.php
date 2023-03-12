@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p class="help danger-text label">{{ $error }}</p>
    @endforeach
@endif