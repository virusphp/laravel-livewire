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

function statusRm($nilai)
{
    return '<button wire:click="showDetailRm('.$nilai.')" class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded hover:bg-yellow-400 dark:bg-yellow-200 dark:text-yellow-900">'.$nilai.'</button>';
}

function statusRujukanPcare($nilai)
{
    return "<button wire:click.prevent=showDetailRujukanPcare('{$nilai}') class='bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded hover:bg-yellow-400 dark:bg-yellow-200 dark:text-yellow-900'>".$nilai."</button>";
}