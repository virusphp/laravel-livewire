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
        $rujukan =  $this->bridge->getRequest($endpoint);
		return $rujukan;
	}

    public function getListRujukanRs($noKartu)
    {
		$endpoint = "Rujukan/RS/List/Peserta/{$noKartu}";
        $rujukan =  $this->bridge->getRequest($endpoint);
		return $rujukan;
	}

    public function getRujukanByNomor($noRujukan)
    {
		$endpoint = "Rujukan/{$noRujukan}";
        $rujukan =  $this->bridge->getRequest($endpoint);
		return $rujukan;
    }

    public function getRujukanRsByNomor($noRujukan)
    {
		$endpoint = "Rujukan/RS/{$noRujukan}";
        $rujukan =  $this->bridge->getRequest($endpoint);
		return $rujukan;
    }
}