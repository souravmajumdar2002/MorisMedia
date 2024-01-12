<!-- resources/views/livewire/flash-message.blade.php -->

<div>
    @if($type && $message)
        <div class="alert alert-{{ $type }}" role="alert">
            {{ $message }}
        </div>
    @endif
</div>