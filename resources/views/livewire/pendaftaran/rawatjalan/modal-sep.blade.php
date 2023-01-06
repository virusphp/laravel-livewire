{{-- Model Confirmasi Add --}}
<x-jet-dialog-modal maxWidth="screen-lg" wire:model="confirmationCreateSep">
	<x-slot name="title">
		{{ isset( $this->pasien->no_sep) ? 'Edit Pembuatan Sep' : 'Create Pembuatan Sep' }}
	</x-slot>

	<x-slot name="content">
		<form class="space-y-0 flex justify-between" action="#">
			{{-- Form Profile Pasien --}}
			<div
				class="w-full max-w-sm p-3 mr-1 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
				<div class="grid md:grid-cols-2 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="no_reg" value="{{ __('No Registrasi') }}" />
						<x-jet-input id="no-reg" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.no_reg" />
						<x-jet-input-error for="pasien.no_reg" class="mt-0" />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="nama_pasien" value="{{ __('Nama Pasien') }}" />
						<x-jet-input id="nama-pasien" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.nama_pasien" />
						<x-jet-input-error for="pasien.nama_pasien" class="mt-0" />
					</div>
				</div>

				<div class="grid md:grid-cols-2 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="no_ktp" value="{{ __('No KTP') }}" />
						<x-jet-input id="no-ktp" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.no_ktp" />
						<x-jet-input-error for="pasien.no_ktp" class="mt-0" />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="tanggal_lahir" value="{{ __('Tanggal Lahir') }}" />
						<x-jet-input id="tanggal-lahir" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.tanggal_lahir" />
						<x-jet-input-error for="pasien.tanggal_lahir" class="mt-0" />
					</div>
				</div>

				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="alamat" value="{{ __('Alamat') }}" />
					<x-jet-input id="alamat" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="pasien.alamat" />
					<x-jet-input-error for="pasien.alamat" class="mt-0" />
				</div>

				<div class="grid md:grid-cols-2 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="kelas_rawat" value="{{ __('Hak Kelas') }}" />
						<x-jet-input id="kelas-rawat" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.kelas_rawat" />
						<input type="hidden" name="hak_kelas" wire:model.defer="pasien.hak_kelas">
						<x-jet-input-error for="pasien.kelas_rawat" class="mt-0" />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="status_peserta" value="{{ __('Status Peserta') }}" />
						<x-jet-input id="no-reg" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.status_peserta" />
						<x-jet-input-error for="pasien.status_peserta" class="mt-0" />
					</div>
				</div>

				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="cara_bayar" value="{{ __('Cara Bayar') }}" />
					<x-jet-input id="alamat" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="pasien.cara_bayar" />
					<x-jet-input-error for="pasien.cara_bayar" class="mt-0" />
				</div>

				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="asal_pasien" value="{{ __('Asal Pasien') }}" />
					<x-jet-input id="alamat" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="pasien.asal_pasien" />
					<x-jet-input-error for="pasien.kd_asal_pasien" class="mt-0" />
				</div>

				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="nama_asal_faskes" value="{{ __('Faskes Pasien') }}" />
					<x-jet-input id="alamat" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="pasien.nama_asal_faskes" />
					<input type="hidden" name="kode_asal_faskes" wire:model.defer="pasien.kode_asal_faskes">
					<x-jet-input-error for="pasien.kode_asal_faskes" class="mt-0" />
				</div>

			</div>

			{{-- Form Sep --}}
			<div
				class="w-full max-w-4xl p-3 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
				<div class="grid md:grid-cols-3 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="no_kartu" value="{{ __('Nomor Kartu') }}" />
						<x-jet-input id="no-kartu" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.no_kartu" />
						<x-jet-input-error for="pasien.no_kartu" class="mt-0" />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-input type="checkbox" class="mr-2 leading-tight" wire:model.defer="pasien.cob" />Cob | No
						Rekamedik
						<x-jet-input id="no-rm" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.no_rm" />
						<x-jet-input-error for="pasien.no_rm" class="mt-0" />
					</div>
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="tanggal_sep" value="{{ __('Tanggal Registrasi') }}" />
						<x-jet-input id="tanggal-sep" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.tanggal_sep" />
						<x-jet-input-error for="pasien.tanggal_sep" class="mt-0" />
					</div>
				</div>

				<div class="grid md:grid-cols-3 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<div class="flex justify-start">
							<x-jet-label for="no_rujukan" value="{{ __('No Rujukan') }}" />
							<x-jet-secondary-button class="text-xs w-14 h-3 px-1 items-center"
								wire:click="showListPcare()" wire:loading.attr="disabled">
								{{__('PCARE')}}
							</x-jet-secondary-button>
							<x-jet-secondary-button class="text-xs w-7 h-3 px-1 items-center" wire:click="showListRs()"
								wire:loading.attr="disabled">
								{{__('RS')}}
							</x-jet-secondary-button>
							<x-jet-secondary-button class="text-xs w-7 h-3 px-1 items-center"
								wire:click="$set('showListPcare', false)" wire:loading.attr="disabled">
								{{__('RK')}}
							</x-jet-secondary-button>
							<x-jet-secondary-button class="text-xs w-7 h-3 px-1 items-center"
								wire:click="$set('showListPcare', false)" wire:loading.attr="disabled">
								{{__('SK')}}
							</x-jet-secondary-button>
						</div>
						<x-jet-input id="no-rujukan" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.no_rujukan" />
						<x-jet-input-error for="pasien.no_rujukan" class="mt-0" />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="asal_faskes" value="{{ __('Asal Rujukan') }}" />
						<select id="asal-faskes" name="asal_faskes" wire.model.defer="pasien.asal_fakses"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
							required>
							<option value="">- Pilih Asal Faskes -</option>
							<option value="1">Faskes Tingkat 1</option>
							<option value="2">Faskes Tingkat 2</option>
						</select>
						<x-jet-input-error for="pasien.asal_faskes" class="mt-0" />
					</div>
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="nama_ppk_rujukan" value="{{ __('PPK Rujukan / Perujuk') }}" />
						<x-jet-input id="nama-ppk-rujukan" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.nama_ppk_rujukan" />
						<input type="hidden" name="kode_ppk_rujukan" wire:model.defer="pasien.kode_ppk_rujukan">
						<x-jet-input-error for="pasien.kode_ppk_rujukan" class="mt-0" />
					</div>
				</div>

				<div class="grid md:grid-cols-3 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="nama_diagnosa" value="{{ __('Diagnosa') }}" />
						<x-jet-input id="nama-diagnosa" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.nama_diagnosa" />
						<input type="hidden" name="kode_diagnosa" wire:model.defer="pasien.kode_diagnosa">
						<x-jet-input-error for="pasien.diagnosa" class="mt-0" />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="nama_poli" value="{{ __('Tujuan Poli') }}" />
						<x-jet-input id="nama-poli" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.nama_poli" />
						<input type="hidden" name="kode_poli" wire:model.defer="pasien.kode_poli">
						<x-jet-input-error for="pasien.kode_poli" class="mt-0" />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="no_telp" value="{{ __('No Telpon') }}" />
						<x-jet-input id="no-telp" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.no_telp" />
						<x-jet-input-error for="pasien.no_telp" class="mt-0" />
					</div>
				</div>

				<div class="relative z-0 mb-1 w-60 group">
					<x-jet-label for="tujuan_kunjungan" value="{{ __('Tujuan Kunjungan') }}" />
					<select wire:model.defer="pasien.tujuan_kunjungan" id="tujuan-kunjungan" name="tujuan_kunjungan"
						class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
						<option value="">- Pilih tujuan kunjungan -</option>
						<option value="0">Normal (Kunjungan Pertama)</option>
						<option value="1">Prosedur</option>
						<option value="2">Konsul Dokter</option>
					</select>
					<x-jet-input-error for="pasien.tujuan_kunjungan" class="mt-0" />
				</div>

				<div class="relative z-0 mb-1 w-60 group {{ $assesmentPelayanan == true ? '' : 'hidden' }}">
					<x-jet-label for="assesment_pelayanan" value="{{ __('Assesment Pelayanan') }}" />
					<select wire:model.defer="pasien.assesment_pelayanan" id="assesment-pelayanan"
						name="assesment_pelayanan"
						class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
						<option value="">- Pilih Assesment -</option>
						@foreach($dataAssesmentPelayanan as $val)
						<option value="{{ $val->kode }}" wire:key="{{ $val->kode }}">{{ $val->nama }}
						</option>
						@endforeach
					</select>
					<x-jet-input-error for="pasien.assesment_pelayanan" class="mt-0" />
				</div>

				<div class="grid md:grid-cols-3 md:gap-6 {{ $prosedure == true ? '' : 'hidden' }}">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="prosedur" value="{{ __('Prosedur') }}" />
						<select wire:model.defer="pasien.prosedur" id="prosedur"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
							<option value="">- Pilih prosedur -</option>
							@foreach($dataProsedur as $val)
							<option value="{{ $val->kode }}" wire:key="{{ $val->kode }}">{{ $val->nama }}
							</option>
							@endforeach
						</select>
						<x-jet-input-error for="pasien.prosedur" class="mt-0" />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="penunjang" value="{{ __('Penunjang') }}" />
						<select wire:model.defer="pasien.kode_penunjang" id="prosedur"
							class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
							<option value="">- Pilih penunjang -</option>
							@foreach($dataPenunjang as $val)
							<option value="{{ $val->kode }}" wire:key="{{ $val->kode }}">{{ $val->nama }}
							</option>
							@endforeach
						</select>
						<x-jet-input-error for="pasien.penunjang" class="mt-0" />
					</div>
				</div>

				<div class="{{ $dpjp == true ? 'grid': 'hidden' }} md:grid-cols-3 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="no_surat_kontrol" value="{{ __('No Surat Kontrol') }}" />
						<x-jet-input id="no-surat" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.no_surat_kontrol" />
						<x-jet-input-error for="pasien.no_surat_kontrol" class="mt-0" />
					</div>

					<div class="relative z-0 mb-1 col-span-2 w-full group">
						<x-jet-label for="dpjp_pemberisurat" value="{{ __('DPJP Pemberi surat / SKDP') }}" />
						<x-jet-input id="dpjp_pemberisurat" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.dpjp_pemberisurat" />
						<x-jet-input-error for="pasien.dpjp_pemberisurat" class="mt-0" />
					</div>
				</div>

				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="catatan" value="{{ __('Catatan') }}" />
					<x-jet-input id="catatan" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="pasien.catatan" />
					<x-jet-input-error for="pasien.catatan" class="mt-0" />
				</div>

				<div class="{{ $lakaLantas == true ? '' : 'hidden' }}">
					<div class="grid md:grid-cols-3 md:gap-6">
						<div class="relative z-0 mb-1 w-full group">
							<x-jet-label for="tanggal_kejadian" value="{{ __('Tanggal Kejadian') }}" />
							<x-jet-input id="tanggal-kejadian" type="text" class="mt-0 text-xs block w-full"
								wire:model.defer="pasien.tanggal_kejadian" />
							<x-jet-input-error for="pasien.tanggal_kejadian" class="mt-0" />
						</div>

						<div class="relative z-0 mb-1 w-full group">
							<x-jet-label for="suplesi" value="{{ __('Suplesi') }}" />
							<x-jet-input id="suplesi" type="text" class="mt-0 text-xs block w-full"
								wire:model.defer="pasien.suplesi" />
							<x-jet-input-error for="pasien.suplesi" class="mt-0" />
						</div>

						<div class="relative z-0 mb-1 w-full group">
							<x-jet-label for="no_sep_suplesi" value="{{ __('No Sep Suplesi') }}" />
							<x-jet-input id="no-sep-suplesi" type="text" class="mt-0 text-xs block w-full"
								wire:model.defer="pasien.no_sep_suplesi" />
							<x-jet-input-error for="pasien.no_sep_suplesi" class="mt-0" />
						</div>
					</div>

					<div class="grid md:grid-cols-3 md:gap-6">
						<div class="relative z-0 mb-1 w-full group">
							<x-jet-label for="propinsi" value="{{ __('Propinsi') }}" />
							<x-jet-input id="propinsi" type="text" class="mt-0 text-xs block w-full"
								wire:model.defer="pasien.propinsi" />
							<x-jet-input-error for="pasien.propinsi" class="mt-0" />
						</div>

						<div class="relative z-0 mb-1 w-full group">
							<x-jet-label for="kabupaten" value="{{ __('Kabupaten') }}" />
							<x-jet-input id="kabupaten" type="text" class="mt-0 text-xs block w-full"
								wire:model.defer="pasien.kabupaten" />
							<x-jet-input-error for="pasien.kabupaten" class="mt-0" />
						</div>

						<div class="relative z-0 mb-1 w-full group">
							<x-jet-label for="kecamatan" value="{{ __('Kecamatan') }}" />
							<x-jet-input id="kecamatan" type="text" class="mt-0 text-xs block w-full"
								wire:model.defer="pasien.kecamatan" />
							<x-jet-input-error for="pasien.kecamatan" class="mt-0" />
						</div>
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="keterangan" value="{{ __('Keterangan') }}" />
						<x-jet-input id="catatan" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.keterangan" />
						<x-jet-input-error for="pasien.keterangan" class="mt-0" />
					</div>
				</div>

			</div>

		</form>
	</x-slot>

	<x-slot name="footer">
		<x-jet-secondary-button wire:click="$set('confirmationCreateSep', false)" wire:loading.attr="disabled">
			{{ __('Cancel') }}
		</x-jet-secondary-button>
	</x-slot>
</x-jet-dialog-modal>