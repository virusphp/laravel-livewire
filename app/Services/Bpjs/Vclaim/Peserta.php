<?php

namespace App\Services\Bpjs\Vclaim;

use Bpjs\Bridging\Vclaim\BridgeVclaim;

class Peserta 
{
	protected $bridge;

    public function __construct()
    {
        $this->bridge = new BridgeVclaim;
    }

    public function getPesertaByKartu($noKartu, $tglSep)
    {
		$endpoint = "Peserta/nokartu/{$noKartu}/tglSEP/{$tglSep}";
        $peserta =  $this->bridge->getRequest($endpoint);
		return $peserta;
	}
}