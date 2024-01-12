@include('layouts.header')

	
	@if(request()->is('events'))
		<livewire:calendar-events />
	@elseif(request()->is('create-event'))
		<livewire:create-event />
	@endif
	@livewire('flash-message')
    @livewireScripts

</body>

</html>
@include('layouts.script')

    @push('pagescript')
        <script>
            // Livewire listener to show Toastr
            Livewire.on('showFlashMessage', function () {
                alert('sasasa');
            });
        </script>
    @endpush