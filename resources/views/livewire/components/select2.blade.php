<div wire:ignore>
    <div class="col-span-6 sm:col-span-4 mt-2">
        <x-jet-label for="kodeSubunit" value="{{ __('Subunit') }}" />
        <select wire:model="kodeSubunit" wire:change="kodeSubunit" id="kd-sub-unit"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Select Subunit</option>
            @foreach($subunit as $val)
            <option value="{{ $val->kd_sub_unit }}" wire:key="{{ $val->kd_sub_unit }}">{{ $val->nama_sub_unit }}
            </option>
            @endforeach
        </select>
        <x-jet-input-error for="kodeSubunit" class="mt-2" />
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function () {
        var subunit_select2 = $('#kd-sub-unit').select2({
            width: "100%",
            allowClear: true,
        });
        $('#kd-sub-unit').on('change', function (e) {
            var data = $('#kd-sub-unit').select2("val");
            @this.emit('getSubunit', data);
        });
        subunit_select2.val({{$kodeSubunit}});
    });
</script>
@endpush