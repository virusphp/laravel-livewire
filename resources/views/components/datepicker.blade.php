@props([
'error' => null
])

<div x-data="{ value: @entangle($attributes->wire('model')) }" x-on:change="value = $event.target.value" x-init="
        new Pickday({ field: $refs.input, 'format': 'DD.MM.YYYY', firstDay: 1 });">
	<input {{ $attributes->whereDoesntStartWith('wire:model') }}
	x-ref="input"
	x-bind:value="value"
	type="text"
	class="pl-10 block w-full shadow-sm sm:text-lg bg-gray-50 border-gray-300 @if($error) focus:ring-danger-500
	focus:border-danger-500 border-danger-500 text-danger-500 pr-10 @else focus:ring-primary-500
	focus:border-primary-500 @endif rounded-md"
	/>
</div>