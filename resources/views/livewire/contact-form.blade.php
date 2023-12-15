<div class="rounded border bg-gray-50 p-6">

	<h2 class="bold mb-2 text-xl">User submit</h2>

	@if (session('status'))
		<div class="mb-4 rounded-lg bg-green-50 p-4 text-sm text-green-800 border border-green-800" role="alert">
			{{ session('status') }}
		</div>
	@endif

	@if ($isSubmitted)
		<div class="alert alert-success">
			Your data:
			<ul>
				<li>Name: {{ $name }}</li> <!-- accede directamente a las propiedades -->
				<li>Email: {{ $email }}</li> <!-- accede directamente a las propiedades -->
			</ul>
		</div>
	@else
		<form wire:submit.prevent="submit">

			<div class="mb-2">
				<input class="rounded border p-2 px-4" type="text" wire:model="name" placeholder="Name">
				@error('name')
					<span class="error text-red-600">{{ $message }}</span>
				@enderror
			</div>

			<div class="mb-2">
				<input class="rounded border p-2 px-4" type="text" wire:model="email" placeholder="Email">
				@error('email')
					<span class="error text-red-600">{{ $message }}</span>
				@enderror
			</div>

			<button
				class="rounded bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none"
				type="submit">Save Contact</button>
		</form>
	@endif
</div>
