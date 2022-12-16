<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Laporan Faktur TT') }}
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
                <div class="mt-2 text-2xl font-bold uppercase flex justify-between">
                    <div>
                        Faktu Tanda Terima
                    </div>
                    <div class="mr-2">

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
                        <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="font-extralight text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-1 px-1 font-bold">
                                        NOTA SP
                                        {{-- <button wire:click="sortBy('notasp')">NOTA SP </buttcon>
                                            <x-sort-icon sortField="notasp" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                                            --}}
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        NO FAKTUR
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Tanggal
                                        {{-- <button wire:click="sortBy('tanggal')">TANGGAL </button> --}}
                                        {{--
                                        <x-sort-icon sortField="tanggal" :sort-by="$sortBy" :sort-asc="$sortAsc" /> --}}
                                    </th>
                                    <th scope="col" class="py-1 px-1 ">
                                        <div class="flex items-center">
                                            Petugas
                                        </div>
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Nama Suplier
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Kode
                                    </th>
                                    <th scope="col" class="py-2 px-1">
                                        Nama Barang
                                        {{-- <button wire:click="sortBy('nama_barang')">NAMA BARANG </button> --}}
                                        {{--
                                        <x-sort-icon sortField="nama_barang" :sort-by="$sortBy" :sort-asc="$sortAsc" />
                                        --}}
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Harga
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Jumlah B (Satuan)
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Jumlah Total (B)
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Dis (%)
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Pot (Rp)
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Jumlah Harga Beli
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Jumlah Harga Beli (PPN)
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Isi
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Jumlah K (Satuan)
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Harga Net
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Harga Jual
                                    </th>
                                    <th scope="col" class="py-1 px-1">
                                        Harga Jual (PPN)
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-xs">
                                @foreach($dataFakturTT as $val)
                                <tr
                                    class="bg-white font-thin border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="py-1 px-1 font-thin text-gray-900 dark:text-white">
                                        {{ $val->nota_sp }}
                                    </th>
                                    <td class="py-1 px-1">
                                        {{ $val->no_faktur }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ tanggalFormat($val->tanggal) }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->petugas }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->nama_suplier }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ barangFormat($val->kd_barang) }}
                                    </td>
                                    <td class="py-2 px-1">
                                        {{ $val->nama_barang }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ rupiah($val->harga_netto_besar) }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->jumlah_besar }} {{ $val->satuan_besar }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ rupiah($val->jumlah_harga_besar) }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->senpot }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ rupiah($val->potongan) }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ rupiah($val->jumlah_harga_besar_net) }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ rupiah( $val->jumlah_harga_besar_net + ($val->jumlah_harga_besar_net *
                                        $val->ppn / 100) ) }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->isi }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ $val->jumlah_kecil }} {{ $val->satuan_kecil }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ rupiah($val->harga_netto_kecil) }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ rupiah($val->harga_jual) }}
                                    </td>
                                    <td class="py-1 px-1">
                                        {{ rupiah($val->harga_jual_ppn) }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-3">
                        {{ $dataFakturTT->appends(['search' => 'search'])->render() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>