<?php

function statusDepo($nilai) {
	if ($nilai == "1") {
		$span = '<p class="text-indigo-500 bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">DEPO</p>';
	} else if($nilai == "0"){
 		$span = '<p class="text-red-500 bg-orange-500 hover:bg-orange-600 active:bg-orange-700 focus:outline-none focus:ring focus:ring-orange-300">ANFRAH</p>';
	}
	return $span;
}