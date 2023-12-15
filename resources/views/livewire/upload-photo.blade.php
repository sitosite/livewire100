<div class="rounded border bg-gray-50 p-6">

	<h2 class="bold mb-2 text-xl">Upload your photo</h2>

	@if (session('status'))
		<div class="mb-4 rounded-lg bg-green-50 p-4 text-sm text-green-800 border border-green-800" role="alert">
			{{ session('status') }}
		</div>
	@endif

	@if ($isSubmitted)

		<div class="alert alert-success">
			<p>Your photo:</p>
			<img class="w-max-6xl rounded" src="{{ $url }}">
		</div>
	@else
		<form wire:submit.prevent="save">



			@if ($photo)
				<p>Photo Preview:</p>
				<img class="w-max-6xl mb-2 rounded" src="{{ $photo->temporaryUrl() }}">
			@endif

			<div class="mb-2">
				<input class="rounded border p-2 px-4" type="file" wire:model="photo">

				@error('photo')
					<span class="error">{{ $message }}</span>
				@enderror
			</div>

			<button
				class="rounded bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none"
				type="submit">Save Photo</button>
		</form>
	@endif
</div>
