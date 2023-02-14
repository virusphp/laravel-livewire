<?php

namespace App\Services\Kemkes\Eklaim;

use App\Services\Kemkes\Inacbg\BridgeInacbg;
use App\Traits\Inacbg;

class NewClaimService 
{
    use Inacbg;

	protected $bridge;
	protected $response;

    public function __construct()
    {
        $this->bridge = new BridgeInacbg;
    }

    public function handleRequest($data)
    {
        $req['metadata']['method'] = 'new_claim';
        $req['data']['nomor_kartu'] = $data->nomor_kartu;
        $req['data']['nomor_sep'] = $data->nomor_sep;
        $req['data']['nomor_rm'] = $data->nomor_rm;
        $req['data']['nama_pasien'] = $data->nama_pasien;
        $req['data']['tgl_lahir'] = $data->tgl_lahir;
        $req['data']['gender'] = $data->gender; // gender 1 = male, 2 = female
        $jsonRequest = json_encode($req);
        $payload = $this->inacbg_encrypt($jsonRequest, config('eklaim.api.secretkey'));

        return $payload;
    }

    public function postNewClaim($data)
    {
        $data = $this->handleRequest($data);
        $claimPrint =  $this->bridge->postRequest($data);
		$response = $this->handleResponse($claimPrint);
        dd($response);
		return $response;
	}

    public function handleResponse($response)
    {
        $first = strpos($response, "\n")+1;
        $last = strpos($response, "\n")-1;
        $response = substr($response, $first, strlen($response) - $first - $last);
        $response = $this->inacbg_decrypt($response, config('eklaim.api.secretkey'));
        $result = json_decode($response, true);
        return $result;
    }
}