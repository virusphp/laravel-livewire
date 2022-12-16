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