<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@livewireStyles

</head>

<body class="antialiased py-6">

	<div class="items-top relative flex min-h-screen justify-center sm:items-center sm:pt-0">
		<div class="mx-auto max-w-[800px] w-full sm:px-6 lg:px-8">

			<div class="mb-4">
				<livewire:counter />
			</div>

			<div class="mb-4">
				<livewire:search-users />
			</div>

			<div class="mb-4">
				<livewire:contact-form />
			</div> 

            <div class="mb-4">
				<livewire:upload-photo />
			</div>

            <div class="mb-4">
				<livewire:show-posts />
			</div>

		</div>
	</div>

	@livewireScripts
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>

</html>
