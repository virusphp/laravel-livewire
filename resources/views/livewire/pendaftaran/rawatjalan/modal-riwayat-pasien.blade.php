{{-- Model Confirmasi Add --}}
<x-jet-dialog-modal maxWidth="screen-lg" wire:model="showModalRiwayatPasien">
	<x-slot name="title">
		Riwayat Pasien
	</x-slot>

	<x-slot name="content">
		<form class="space-y-0 flex justify-between" action="#">
			{{-- Form Profile Pasien --}}
			<div
				class="w-full max-w-sm p-3 mr-1 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

				<div> <img class="rounded w-full" src="{{ asset('images/pasien/pasien-300.png') }}"
						alt=" Extra large avatar">
				</div>
			</div>
			{{-- Form Sep --}}
			<div
				class="w-full max-h-screen p-3 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
				<div class="overflow-y-auto max-h-96">
					<table class="w-full text-xs text-left text-gray-500 dark:text-gray-400 ">
						<thead
							class="font-extralight text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
							<tr>
								<th scope="col" class="py-1 px-1 font-bold">
									NO REGISTRASI
								</th>
								<th scope="col" class="py-1 px-1">
									TANGGAL REG
								</th>
								<th scope="col" class="py-1 px-1">
									JENIS RAWAT
								</th>
								<th scope="col" class="py-1 px-1">
									CARA BAYAR
								</th>
								<th scope="col" class="py-1 px-1">
									NO SEP
								</th>
								<th scope="col" class="py-1 px-1">
									POLIKLINIK
								</th>
								<th scope="col" class="py-1 px-1">
									NAMA RUANG
								</th>
							</tr>
						</thead>
						<tbody>
							@if(isset($riwayatPasien) && count($riwayatPasien) > 0)
							@foreach($riwayatPasien as $val)
							<tr
								class="bg-white font-thin border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
								<td scope="row" class="py-1 px-1 font-thin text-gray-900 dark:text-white">
									{{ $val->no_reg }}
								</td>
								<td class="py-1 px-1">
									{{ tanggalFormat($val->tanggal_reg) }}
								</td>
								<td class="py-1 px-1">
									{{ jenisRawat($val->jenis_rawat) }}
								</td>
								<td class="py-1 px-1">
									{{ $val->cara_bayar }}
								</td>
								<td class="py-1 px-1">
									{{ $val->no_sep }}
								</td>
								<td class="py-1 px-1">
									{{ $val->nama_poliklinik }}
								</td>
								<td class="py-1 px-1">
									{{ $val->nama_ruang }}
								</td>
							</tr>
							@endforeach
							@else
							<tr>
								<td class="py-1 px-1 mx-auto">Pasien tidak punya riwayat pemeriksaan di rs</td>
							</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>

		</form>
	</x-slot>

	<x-slot name="footer">
		<x-jet-secondary-button wire:click="$set('showModalRiwayatPasien', false)" wire:loading.attr="disabled">
			{{ __('Cancel') }}
		</x-jet-secondary-button>
	</x-slot>
</x-jet-dialog-modal>