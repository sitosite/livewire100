<div class="text-center">
	<!-- Alpine Counter Component -->
	<div x-data class="border rounded p-6 bg-gray-50">
		<p class="mb-2 text-2xl bold" x-text="$wire.count"></p>

		<button
			class="rounded bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none"
			x-on:click="$wire.increment()">Increment</button>
	</div>
</div>
