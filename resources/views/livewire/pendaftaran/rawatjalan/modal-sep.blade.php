{{-- Model Confirmasi Add --}}
<x-jet-dialog-modal maxWidth="screen-lg" wire:model="confirmationCreateSep">
	<x-slot name="title">
		{{ isset( $this->pasien->no_reg) ? 'Edit Pembuatan Sep' : 'Create Pembuatan Sep' }}
	</x-slot>

	<x-slot name="content">
		<div
			class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
			<form class="space-y-6" action="#">
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
						<x-jet-label for="nama_pasien" value="{{ __('Nama Pasien') }}" />
						<x-jet-input id="no-reg" type="text" class="mt-0 text-xs block w-full"
							wire:model.defer="pasien.nama_pasien" />
						<x-jet-input-error for="pasien.nama_pasien" class="mt-0" />
					</div>
				</div>
				<div class="relative z-0 mb-1 w-full group">
					<x-jet-label for="alamat" value="{{ __('Alamat') }}" />
					<x-jet-input id="alamat" type="text" class="mt-0 text-xs block w-full"
						wire:model.defer="pasien.alamat" />
					<x-jet-input-error for="pasien.alamat" class="mt-0" />
				</div>
			</form>
		</div>
	</x-slot>

	<x-slot name="footer">
		<x-jet-secondary-button wire:click="$set('confirmationCreateSep', false)" wire:loading.attr="disabled">
			{{ __('Cancel') }}
		</x-jet-secondary-button>
	</x-slot>
</x-jet-dialog-modal>