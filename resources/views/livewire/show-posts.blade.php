<div class="rounded border bg-gray-50 p-6">

	<div class="mb-4 flex justify-between">
		<h2 class="mb-2 text-2xl font-bold">🚀 Posts</h2>
		<div class="flex gap-2">
			<input class="flex rounded border p-2 px-4 focus:outline-none" wire:model="search" type="text"
				placeholder="Filter per title..." />
			<button wire:click="searchReset"
				class="rounded bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none">Reset</button>
		</div>
	</div>

	<div class="mb-6 grid grid-cols-3 gap-2">
		@foreach ($posts as $post)
			<div class="rounded border p-2">
				<img src="{{ $post->image }}" alt="{{ $post->title }}" class="mb-2 aspect-square w-full rounded object-cover">
				<h2 class="text-xl font-bold">{{ $post->title }}</h2>
			</div>
		@endforeach
	</div>

	{{ $posts->links() }}
</div>
