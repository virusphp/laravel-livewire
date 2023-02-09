<?php

namespace App\Services\Kemkes;

class CurlFactory 
{
	public function request($endpoint, $method = "POST", $payload = "")
	{
		$optf = [
 			CURLOPT_VERBOSE => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_TIMEOUT => 5,
			CURLOPT_CONNECTTIMEOUT => 5,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER => []
		];

		if (!empty($method)) {
			$optf[CURLOPT_CUSTOMREQUEST] = $method;
            $optf[CURLOPT_POSTFIELDS] = $payload;
            $optf[CURLOPT_HTTPHEADER][] = 'Content-Type: Application/x-www-form-urlencoded';
		} else {
			$optf[CURLOPT_HTTPHEADER][] = 'Content-Type: Application/json';
		}

		$ch = curl_init($endpoint);
	 	curl_setopt_array($ch, $optf);
		$result = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);

		return $result;
	}

	protected function setHeader($headers)
	{
		$header = [];
		$header[] = 'Accept: application/json';
		$header[] = 'X-cons-id:'. $headers['X-cons-id'];
		$header[] = 'X-timestamp:'. $headers['X-timestamp'];
		$header[] = 'X-signature:'. $headers['X-signature'];
		$header[] = 'user_key:'. $headers['user_key'];
		return $header;
	}
}