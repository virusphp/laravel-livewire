<div class="bg-white overflow-hidden shadow-xl mt-2 {{ $detailPasien == null ? 'hidden' : '' }}">
	<div class="p-2 sm:px-10 bg-white border-b border-gray-200 ">

		<div class="mt-2 text-gray-500">
			<div class="overflow-x-auto relative shadow-sm sm:rounded-sm">
				<table class="w-full text-xs text-left text-gray-500 dark:text-gray-400 border">
					<thead
						class="font-extralight text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
						<tr>
							<th scope="col" class="py-1 px-1 font-bold">
								TANGGAL MASUK
							</th>
							<th scope="col" class="py-1 px-1 font-bold">
								NO SEP
							</th>
							<th scope="col" class="py-1 px-1">
								NO RM
							</th>
							<th scope="col" class="py-1 px-1">
								NAMA PASIEN
							</th>
						</tr>
					</thead>
					<tbody class="text-xs">
						@if(isset($detailPasien) && count($detailPasien) > 0)
						@foreach($detailPasien as $val)
						<tr
							class="bg-white font-thin border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<th scope="row" class="py-1 px-1 font-thin text-gray-900 dark:text-white">
								{!! detailKlaim($val->tgl_reg, $val->no_sep) !!}
							</th>
							<td class="py-1 px-1">
								{{ $val->no_sep }}
							</td>
							<td class="py-1 px-1">
								{{ $val->no_rm }}
							</td>
							<td class="py-1 px-1">
								{{ $val->nama_pasien }}
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>