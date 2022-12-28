<div x-data="{ value: @entangle($attributes->wire('model')) }" x-on:change="value = $event.target.value" x-init="
    new Pikaday({
        field:  $refs.input,
        format: 'YYYY-MM-DD',
        defaultDate: value ? new Date(value) : new Date(),
        setDefaultDate: true,
        theme: 'pikaday-white',
        i18n: {
            months        : moment.localeData()._months,
            weekdays      : moment.localeData()._weekdays,
            weekdaysShort : moment.localeData()._weekdaysShort
        }
    })">
	<input {{ $attributes->whereDoesntStartWith('wire:model') }}
	x-ref="input"
	x-bind:value="value"
	type="text"
	class="form-control"
	/>
</div>