<?php

##############################
## Author  : Aris Haryanto  ##
## Library : Bitly Url      ##
## Date    : 5/17/2016      ##
##############################

class Bitlys {

    function __construct($config){
        $this->config = (object) $config;
    }

    function sendResponse($url, $param){
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $server_output = curl_exec($ch);
        return json_decode($server_output);
        
	}

	function shorten($url){
		$host 	= 'https://api-ssl.bitly.com/v3/shorten';
		$param 	= array(
						'access_token' => $this->config->access_token,
                        'longUrl'  => $url
                      	);

	    $result = $this->sendResponse($host, $param);
	    return $result->data->url;
	}

	function expand($url){
		$host 	= 'https://api-ssl.bitly.com/v3/expand';
		$param 	= array(
						'login' => $this->config->login,
						'apiKey' => $this->config->apiKey,
						'shortUrl' => $url
						);

	    $result = $this->sendResponse($host, $param);
	    return $result->data->expand[0]->long_url;
	}

}

?>