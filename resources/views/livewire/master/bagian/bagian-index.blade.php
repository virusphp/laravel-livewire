<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Bagian Farmasi') }}
    </h2>
</x-slot>

<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2 sm:px-10 bg-white border-b border-gray-200 ">
                @if(session()->has('message'))
                <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200 relative"
                    x-data="{show: true}" x-show="show" role="alert ">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                        {{ session('message') }}
                    </div>
                    <button type="button" @click="show = false"
                        class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                @endif
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
                            <input type="search" wire:model.debounce.300ms="search" placeholder="Search..."
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
                                        <div class="flex items-center">
                                            <button wire:click="sortBy('kdbagian')">Kode Bagian </buttcon>
                                                <x-sort-icon sortField="kdbagian" :sort-by="$sortBy"
                                                    :sort-asc="$sortAsc" />
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6 ">
                                        <div class="flex items-center">
                                            <button wire:click="sortBy('nmbagian')">Nama Bagian </button>
                                            <x-sort-icon sortField="nmbagian" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <button wire:click="sortBy('status_apotik')">Status </button>
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
                                        <x-jet-button wire:click="confirmEdit('{{ $val->kdbagian }}')"
                                            class="bg-orange-500 hover:bg-orange-700">
                                            Edit
                                        </x-jet-button>
                                        <x-jet-danger-button class="ml-3"
                                            wire:click="confirmDelete('{{ $val->kdbagian }}')"
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

                            <x-jet-danger-button class="ml-3" wire:click="deleteDepo('{{$confirmationDelete}}')"
                                wire:loading.attr="disabled">
                                {{ __('Delete') }}
                            </x-jet-danger-button>
                        </x-slot>
                    </x-jet-dialog-modal>

                    {{-- Model Confirmasi Add --}}
                    <x-jet-dialog-modal wire:model="confirmationAdd">
                        <x-slot name="title">
                            {{ isset( $this->bagianFarmasi->kdbagian) ? 'Edit Depo' : 'Add Depo' }}
                        </x-slot>

                        <x-slot name="content">
                            <div class="col-span-6 sm:col-span-4 mt-2">
                                <x-jet-label for="nmbagian" value="{{ __('Nama Bagian') }}" />
                                <x-jet-input id="nmbagian" type="text" class="mt-1 block w-full"
                                    wire:model.defer="bagianFarmasi.nmbagian" />
                                <x-jet-input-error for="bagianFarmasi.nmbagian" class="mt-2" />
                            </div>

                            {{-- @livewire('components.select2', ['kodeSubunit' => $kodeSubunit]) --}}
                            <div class="col-span-6 sm:col-span-4 mt-2">
                                <x-jet-label for="kodeSubunit" value="{{ __('Subunit') }}" />
                                <select wire:model.defer="bagianFarmasi.kd_sub_unit" id="kd-sub-unit"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Select Subunit</option>
                                    @foreach($subunit as $val)
                                    <option value="{{ $val->kd_sub_unit }}" wire:key="{{ $val->kd_sub_unit }}">{{
                                        $val->nama_sub_unit }}
                                    </option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="bagianFarmasi.kd_sub_unit" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4 mt-2">
                                <x-jet-label for="status_apotik" value="{{ __('Status Apotik') }}" />
                                <label for="status_apotik" class="flex items-center">
                                    <x-jet-checkbox id="status_apotik" wire:model.defer="bagianFarmasi.status_apotik" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Depo') }}</span>
                                </label>
                                <x-jet-input-error for="bagianFarmasi.status_apotik" class="mt-2" />
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