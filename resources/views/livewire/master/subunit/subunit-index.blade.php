<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Subunit') }}
    </h2>
</x-slot>

<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2 sm:px-10 bg-white border-b border-gray-200">
                <div class="mt-2 text-2xl font-bold uppercase">
                    Subunit
                </div>

                <div class="mt-2 text-gray-500">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6 font-bold">
                                        Nama Subunit
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Keterangan
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Status
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-right">
                                        Edit
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataSubunit as $val)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $val->nama_sub_unit }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $val->keterangan }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {!! $val->statusLabel() !!}
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-3">
                        {{ $dataSubunit->appends(['search' => 'search'])->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>