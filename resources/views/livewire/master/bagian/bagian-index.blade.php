<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Bagian Farmasi') }}
    </h2>
</x-slot>

<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2 sm:px-10 bg-white border-b border-gray-200 ">
                <div class="mt-2 text-2xl font-bold uppercase flex justify-between">
                    <div>
                        Depo dan Anfrah
                    </div>
                    <div class="mr-2">
                        <x-jet-button wire:click="confirmAdd" class="bg-blue-500 hover:bg-blue-700">
                            Tambah Depo / Anfrah
                        </x-jet-button>
                    </div>
                </div>

                <div class="mt-2 text-gray-500">
                    <div class="flex justify-between py-2">
                        <div>
                            <input type="text" wire:model="search" placeholder="Search..."
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mr-2">
                            <input type="checkbox" class="mr-2 leading-tight" wire:model="depo">Depo Only
                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6 font-bold">
                                        Kode Bagian
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Nama Bagian
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Status
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-right">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataBagian as $val)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $val->kdbagian }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $val->nmbagian }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {!! $val->statusLabel() !!}
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <x-jet-danger-button class="ml-3"
                                            wire:click="confirmDelete({{ $val->kdbagian }})"
                                            wire:loading.attr="disabled">
                                            {{ __('Delete') }}
                                        </x-jet-danger-button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-3">
                        {{ $dataBagian->appends(['search' => 'search'])->render() }}
                    </div>

                    {{-- Model Confirmasi Delete --}}
                    <x-jet-dialog-modal wire:model="confirmationDelete">
                        <x-slot name="title">
                            {{ __('Delete Depo') }}
                        </x-slot>

                        <x-slot name="content">
                            {{ __('Are you sure you want to delete your depo?') }}


                        </x-slot>

                        <x-slot name="footer">
                            <x-jet-secondary-button wire:click="$set('confirmationDelete', false)"
                                wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                            </x-jet-secondary-button>

                            <x-jet-danger-button class="ml-3" wire:click="deleteDepo( {{$confirmationDelete}} )"
                                wire:loading.attr="disabled">
                                {{ __('Delete') }}
                            </x-jet-danger-button>
                        </x-slot>
                    </x-jet-dialog-modal>

                    {{-- Model Confirmasi Add --}}
                    <x-jet-dialog-modal wire:model="confirmationAdd">
                        <x-slot name="title">
                            {{ __('Add Depo') }}
                        </x-slot>

                        <x-slot name="content">
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="kdbagian" value="{{ __('Kode Bagian') }}" />
                                <x-jet-input id="kdbagian" type="text" class="mt-1 block w-full"
                                    wire:model.defer="barangfarmasi.kdbarang" />
                                <x-jet-input-error for="barangfarmasi.kdbarang" class="mt-2" />
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="nmbagian" value="{{ __('Nama Bagian') }}" />
                                <x-jet-input id="nmbagian" type="text" class="mt-1 block w-full"
                                    wire:model.defer="barangfarmasi.nmbagian" />
                                <x-jet-input-error for="barangfarmasi.nmbagian" class="mt-2" />
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <x-jet-label for="status_apotik" value="{{ __('Status Apotik') }}" />
                                <label for="status_apotik" class="flex items-center">
                                    <x-jet-checkbox id="status_apotik" wire:model.defer="barangfarmasi.status_apotik" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Status Apotik') }}</span>
                                </label>
                                <x-jet-input-error for="barangfarmasi.status_apotik" class="mt-2" />
                            </div>
                        </x-slot>

                        <x-slot name="footer">
                            <x-jet-secondary-button wire:click="$set('confirmationAdd', false)"
                                wire:loading.attr="disabled">
                                {{ __('Cancel') }}
                            </x-jet-secondary-button>

                            <x-jet-danger-button class="ml-3" wire:click="saveDepo()" wire:loading.attr="disabled">
                                {{ __('Save') }}
                            </x-jet-danger-button>
                        </x-slot>
                    </x-jet-dialog-modal>
                </div>
            </div>
        </div>
    </div>
</div>