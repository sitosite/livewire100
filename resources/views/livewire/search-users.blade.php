<div class="rounded border bg-gray-50 p-6">

    <h2 class="text-xl bold mb-1">Name Filter</h2>

	<div class="mb-4">
		<input class="rounded border p-2 px-4" wire:model="search" type="text" placeholder="Filter per name..." />
	</div>

    <h2 class="text-xl bold mb-1">Names</h2>

	<ul>
		@foreach ($users as $user)
			<li>{{ $user->name }}</li>
		@endforeach
	</ul>
</div>
