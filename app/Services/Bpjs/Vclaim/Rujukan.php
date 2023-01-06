<?php

namespace App\Services\Bpjs\Vclaim;

use Bpjs\Bridging\Vclaim\BridgeVclaim;

class Rujukan 
{
	protected $bridge;

    public function __construct()
    {
        $this->bridge = new BridgeVclaim;
    }

    public function getListRujukanPcare($noKartu)
    {
		$endpoint = "Rujukan/List/Peserta/{$noKartu}";
        $peserta =  $this->bridge->getRequest($endpoint);
		return $peserta;
	}

    public function getListRujukanRs($noKartu)
    {
		$endpoint = "Rujukan/RS/List/Peserta/{$noKartu}";
        $peserta =  $this->bridge->getRequest($endpoint);
		return $peserta;
	}

}