{{-- Model Confirmasi Add --}}
<x-jet-dialog-modal maxWidth="screen-lg" wire:model="showModalPasien">
	<x-slot name="title">
		Biodata Pasien (Sync Satu-Sehat)
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
				class="w-full max-w-4xl p-3 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

				<div class="grid md:grid-cols-3 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="no_rm" value="{{ __('No Rekamedik') }}" />
						<x-jet-input id="no-rm" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.no_rm" readonly />
					</div>
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="tanggal_rm" value="{{ __('Tanggal Rekamedik') }}" />
						<x-jet-input id="tanggal-rm" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.tanggal_rm" readonly />
					</div>
				</div>

				<div class="grid md:grid-cols-3 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="nik" value="{{ __('Nik') }}" />
						<x-jet-input id="nik" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.nik" readonly />
					</div>
				</div>

				<div class="grid md:grid-cols-2 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="nama_pasien" value="{{ __('Nama Pasien') }}" />
						<x-jet-input id="nama-pasien" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.nama_pasien" readonly />
					</div>
				</div>

				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="alamat" value="{{ __('Alamat') }}" />
					<x-jet-input id="alamat" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="pasien.alamat" readonly />
				</div>

				<div class="grid md:grid-cols-3 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="rt" value="{{ __('RT') }}" />
						<x-jet-input id="rt" type="text" class="mt-0 text-xs block w-full" wire:model.defer="pasien.rt"
							readonly />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="rw" value="{{ __('RW') }}" />
						<x-jet-input id="rw" type="text" class="mt-0 text-xs block w-full" wire:model.defer="pasien.rw"
							readonly />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="kelurahan" value="{{ __('Kelurahan') }}" />
						<x-jet-input id="kelurahan" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.kelurahan" readonly />
					</div>
				</div>

				<div class="grid md:grid-cols-3 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="kecamatan" value="{{ __('Keamatan') }}" />
						<x-jet-input id="kecamatan" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.kecamatan" readonly />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="kabupaten" value="{{ __('Kabupaten') }}" />
						<x-jet-input id="rw" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.kabupaten" readonly />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="propinsi" value="{{ __('Propinsi') }}" />
						<x-jet-input id="propinsi" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.propinsi" readonly />
					</div>
				</div>

				<div class="grid md:grid-cols-3 md:gap-6">
					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="agama" value="{{ __('Agama') }}" />
						<x-jet-input id="agama" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.agama" readonly />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="pekerjaan" value="{{ __('Pekerjaan') }}" />
						<x-jet-input id="pekerjaan" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.pekerjaan" readonly />
					</div>

					<div class="relative z-0 mb-1 w-full group">
						<x-jet-label for="pendidikan" value="{{ __('Pendidikan') }}" />
						<x-jet-input id="pendidikan" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.pendidikan" readonly />
					</div>
				</div>

			</div>

		</form>
	</x-slot>

	<x-slot name="footer">
		<x-jet-secondary-button wire:click="$set('showModalPasien', false)" wire:loading.attr="disabled">
			{{ __('Cancel') }}
		</x-jet-secondary-button>
	</x-slot>
</x-jet-dialog-modal>