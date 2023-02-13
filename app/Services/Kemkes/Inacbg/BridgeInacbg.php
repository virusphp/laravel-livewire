<?php

namespace App\Services\Kemkes\Inacbg;

use App\Services\Kemkes\CurlFactory;
use App\Traits\Inacbg;
use PhpParser\JsonDecoder;

class BridgeInacbg extends CurlFactory
{
    use Inacbg;

    protected $base_url;

    public function __construct()
    {
        $this->base_url = config('eklaim.api.endpoint');
    }
 
    public function postRequest($data)
    {
        $result = $this->request($this->base_url, "POST", $data);
        return $result;
    }

    public function getResponseBody($data)
    {
        $first = strpos($data, "\n")+1;
        $last = strpos($data, "\n")-1;
        $response = substr($data, $first, strlen($data) - $first - $last);
        // dd($response, config('eklaim.api.secretkey'));

        $response = $this->inacbg_decrypt($response, config('eklaim.api.secretkey'));
        $message = json_decode($response, true);
        return $message;
    }

}