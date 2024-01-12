<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') || {{ config('app.name') }}</title>
	<link rel="icon" href="{{asset('assets/images/favicon.png') }}" type="image/x-icon" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
	@include('layouts.css')
	@livewireStyles
</head>

<body>
	<div class="menu-bar-custom">
		@if (Route::has('events.index'))
			@if (request()->route()->getName() != "events.index")
				<a href="{{ url('/events') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Event Calender</a>
			@endif
		@endif

			@if (Route::has('events.create'))
				@if (request()->route()->getName() != "events.create")
					<a href="{{ route('events.create') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Create Event</a>
				@endif
			@endif
	</div>
	@include('layouts.sidebar')