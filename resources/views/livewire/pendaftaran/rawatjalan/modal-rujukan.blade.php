{{-- Model Confirmasi Add --}}
<x-jet-dialog-modal maxWidth="screen-lg" wire:model="showListRujukan">
	<x-slot name="title">
		{{ $asalFaskes == 1 ? 'Rujukan Faskes 1' : 'Rujukan Faskes 2' }}
	</x-slot>

	<x-slot name="content">
		<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
			<table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
				<thead class="font-extralight text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="py-1 px-1 font-bold">
							NO RUJUKAN
						</th>
						<th scope="col" class="py-1 px-1">
							TGL RUJUKAN
						</th>
						<th scope="col" class="py-1 px-1">
							NAMA PASIEN
						</th>
						<th scope="col" class="py-1 px-1">
							POLIKLINIK
						</th>
						<th scope="col" class="py-1 px-1">
							PELAYANAN
						</th>
						<th scope="col" class="py-1 px-1">
							PPK PERUJUK
						</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($listRujukan) && count($listRujukan) > 0)
					@foreach($listRujukan as $val)
					<tr
						class="bg-white font-thin border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
						<td scope="row" class="py-1 px-1 font-thin text-gray-900 dark:text-white">
							{!! statusRujukanPcare($val->noKunjungan) !!}
						</td>
						<td class="py-1 px-1">
							{{ $val->tglKunjungan }}
						</td>
						<td class="py-1 px-1">
							{{ $val->peserta->nama }}
						</td>
						<td class="py-1 px-1">
							{{ $val->poliRujukan->nama }}
						</td>
						<td class="py-1 px-1">
							{{ $val->pelayanan->nama }}
						</td>
						<td class="py-1 px-1">
							{{ $val->provPerujuk->nama }}
						</td>
					</tr>
					@endforeach
					@else
					<tr>
						<td class="py-1 px-1 mx-auto">Pasien tidak punya rujukan dari rs</td>
					</tr>
					@endif
				</tbody>
			</table>
		</div>
	</x-slot>

	<x-slot name="footer">
		<x-jet-secondary-button wire:click="$set('showListRujukan', false)" wire:loading.attr="disabled">
			{{ __('Cancel') }}
		</x-jet-secondary-button>
	</x-slot>
</x-jet-dialog-modal>