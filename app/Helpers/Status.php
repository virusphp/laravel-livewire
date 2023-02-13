<?php

use function Symfony\Component\HttpFoundation\replace;

function rupiah($nilai) {
	return number_format($nilai, 0,",",".");
}

function ribuan($nilai) {
    return number_format($nilai, 2, ',','.');
}

function uang($nilai) {
    return number_format($nilai, 0, ",",".");
}

function persen($nilai) {
    return number_format($nilai, 2, ",",".");
}

function tanggalFormat($nilai)
{
    return date('Y-m-d', strtotime($nilai));
}

function barangFormat($nilai)
{
	//  $words = substr_replace($nilai, "xxxxx",-3,5);
	$words = str_replace("NW00", "", $nilai);
    return $words;
}

function statusFaktur($nilai)
{
    return $nilai == 2 ? "Sudah" : "Belum";
}

function statusBayar($nilai)
{
}

function jenisKelamin($nilai)
{
    return $nilai == 1 ? "Laki laki" : "Perempuan";
}

function jenisRawat($nilai)
{
    return (($nilai == 3 ? "Rawat Darurat" : $nilai == 2) ? "Rawat Inap" : "Rawat Jalan");
}

function statusRm($nilai)
{
    return '<button wire:click="showDetailRm('.$nilai.')" class="border border-blue-600 bg-gray-100 text-blue-600 text-sm font-medium mr-2 px-1.5 py-0.5 rounded hover:bg-blue-600 hover:text-white" >'.$nilai.'</button>';
}

function statusRujukanPcare($nilai)
{
    return "<button wire:click.prevent=showDetailRujukanPcare('{$nilai}') class='bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded hover:bg-yellow-400'>".$nilai."</button>";
}

function detailKlaim($tanggal, $noSep)
{
    return "<button wire:click=showDetailKlaim('{$noSep}') class='border border-blue-600 bg-gray-100 text-blue-600 text-sm font-medium mr-2 px-1.5 py-0.5 rounded hover:bg-blue-600 hover:text-white'>".tanggalFormat($tanggal)."</button>";
}