{{-- Form Sep --}}
<div class="py-2">
	<div class="bg-white overflow-hidden shadow-xl sm:rounded-b-md">
		<div class="max-w-5xl mx-auto sm:px-6 lg:px-8 mt-2">
			<div class="grid md:grid-cols-4 md:gap-8">
				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="cara_bayar" value="{{ __('Jaminan / Cara Bayar') }}" />
					<x-jet-input id="cara-bayar" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="cara_bayar" />
					<x-jet-input-error for="cara_bayar" class="mt-0" />
				</div>

				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="nomor_kartu" value="{{ __('No Peserta') }}" />
					<x-jet-input id="nomor-kartu" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="nomor_kartu" />
					<x-jet-input-error for="nomor_kartu" class="mt-0" />
				</div>
				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="nomor_sep" value="{{ __('No. SEP') }}" />
					<x-jet-input id="nomor-sep" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="nomor_sep" />
					<x-jet-input-error for="nomor_sep" class="mt-0" />
				</div>
				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="cob" value="{{ __('COB') }}" />
					<x-jet-input id="cob" type="text" class="mt-0 text-xs block w-full" wire:model.defer="cob" />
					<x-jet-input-error for="cob" class="mt-0" />
				</div>
			</div>
		</div>

		<div class="max-w-8xl mx-auto sm:px-6 lg:px-8 pb-2 mt-2">
			<div class="flex flex-row border-t-2 border-b-2">
				<div class="basis-3/4 border-r-2">
					<td class="m-2">Jenis Rawat :</td>
					<td class="m-1">
						<input id="jenis-rawat-2" type="radio" value="2" name="jenis_rawat"
							class="ml-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
						<label for="jenis-rawat-2"
							class="text-sm font-medium text-gray-900 dark:text-gray-300 underline">Rawat
							Jalan</label>
					</td>
					<td class="m-1">
						<input id="jenis-rawat-1" type="radio" value="1" name="jenis_rawat"
							class="ml-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
						<label for="jenis-rawat-1"
							class="text-sm font-medium text-gray-900 dark:text-gray-300 underline">Rawat
							Inap</label>
					</td>
					<td class="m-1">
						<input id="eksekutif" type="checkbox" value="1" name="eksekutif"
							class="ml-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
						<label for="eksekutif"
							class="text-sm font-medium text-gray-900 dark:text-gray-300 underline-offset-1 underline">Eksekutif
						</label>
					</td>
					<td class="m-1">
						<input id="naik-kelas" type="checkbox" value="1" name="naik_kelas"
							class="ml-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
						<label for="naik-kelas"
							class="text-sm font-medium text-gray-900 dark:text-gray-300 underline">Naik/Turun
							Kelas
						</label>
					</td>
					<td class="m-1">
						<input id="rawat-intensif" type="checkbox" value="1" name="rawat_intensif"
							class="ml-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
						<label for="rawat-intensif"
							class="text-sm font-medium text-gray-900 dark:text-gray-300 underline">Ada Rawat Intensif
							Kelas
						</label>
					</td>
				</div>
				<div class="basis-1/4 ml-2">
					<td class="m-2">Kelas Hak :</td>
					<td class="m-1">
						<span>-</span>
					</td>
					<td class="m-1">
						<input id="kelas-hak-3" type="radio" value="3" name="kelas_hak"
							class="ml-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
						<label for="kelas-hak-3"
							class="text-sm font-medium text-gray-900 dark:text-gray-300 underline">Kelas 3</label>
					</td>
					<td class="m-1">
						<input id="kelas-hak-2" type="radio" value="2" name="kelas_hak"
							class="ml-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
						<label for="kelas-hak-3"
							class="text-sm font-medium text-gray-900 dark:text-gray-300 underline">Kelas 1</label>
					</td>
					<td class="m-1">
						<input id="kelas-hak-2" type="radio" value="1" name="kelas_hak"
							class="ml-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-gray-700 dark:border-gray-600">
						<label for="kelas-hak-3"
							class="text-sm font-medium text-gray-900 dark:text-gray-300 underline">Kelas 1</label>
					</td>
				</div>
			</div>
		</div>

	</div>
</div>