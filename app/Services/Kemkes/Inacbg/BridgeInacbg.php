<?php

namespace App\Services\Kemkes\Inacbg;

use App\Services\Kemkes\CurlFactory;

class BridgeVclaim extends CurlFactory
{
    protected $config;
    protected $response;

    public function __construct()
    {
        $this->config = new ConfigVclaim;
    }
 
    public function postRequest($endpoint, $data)
    {
        $result = $this->request($this->config->setUrl().$endpoint, "POST", $data);
		dd($result);
        return $result;
    }

}