<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Pendaftaran Rawata Jalan') }}
    </h2>
</x-slot>

<div class="py-6">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
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
                <div class="mt-2 font-bold uppercase flex justify-between">
                    <div class="text-2xl">
                        Daftar
                        <span class="font-normal">Rawat Jalan</span>
                    </div>
                    <div class="mr-2">

                    </div>
                </div>

                <div class="mt-2 text-gray-500">
                    <div class="flex justify-start py-2">
                        <div class="mr-2">
                            <input type="search" wire:model.debounce.300ms="search" placeholder="Search..."
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="relative mr-2">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>

                            <x-datepicker wire:model="tanggal" id="datepicker"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>
                        <div class="mr-2">

                        </div>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="font-extralight text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-1 px-1 font-bold">
                                        NO REG
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        NO RM
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        NAMA PASIEN
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        POLIKLINIK
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        BAYAR
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        NO SEP
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        AKSI
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="text-xs">
                                @foreach($dataRawatJalan as $val)
                                <tr
                                    class="bg-white font-thin border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="py-1 px-1 font-thin text-gray-900 dark:text-white">
                                        {{ $val->no_reg }}
                                    </th>
                                    <td class="py-1 px-1">
                                        {!! statusRm($val->no_rm) !!}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->nama_pasien }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->nama_sub_unit }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->cara_bayar }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->no_sep }}
                                    </td>
                                    <td class="py-1 px-1">
                                        <x-jet-button wire:click="confirmCreateSep('{{ $val->no_reg }}')"
                                            class="p-1 py-1 px-2 bg-purple-500 hover:bg-purple-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                            </svg>
                                        </x-jet-button>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-3">
                        {{ $dataRawatJalan->appends(['search' => 'search'])->render() }}
                    </div>
                    @include('livewire.pendaftaran.rawatjalan.modal-sep')
                    @include('livewire.pendaftaran.rawatjalan.modal-rujukan')
                    @include('livewire.pendaftaran.rawatjalan.modal-riwayat-pasien')

                </div>
            </div>
        </div>
    </div>
</div>
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('build/public/css/pikaday.css') }}">
@endpush
@push('scripts')
{{-- @vite('resources/js/datepicker.js') --}}
<script src="{{ asset('plugins/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('build/public/js/pikaday.js') }}"></script>

@endpush