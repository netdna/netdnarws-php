<?php
require_once("OAuth.php");

$key    = 'consumer_key';
$secret = 'consumer_secret';
$alias  = 'company_alias';

function NetDNA($api_call,$method_type)
{
	
global $alias,$key,$secret,$OAuthRequest;

	// create an OAuth consumer with your key and secret
	$consumer = new OAuthConsumer($key, $secret, NULL);

	// the endpoint for your request
	$endpoint = "https://rws.netdna.com/$alias/$api_call"; //this endpoint will pull the account information for the provided alias

	//parse endpoint before creating OAuth request
	$parsed = parse_url($endpoint);
	if (array_key_exists("parsed", $parsed))
	{
	    parse_str($parsed['query'], $params);
	}

	//generate a request from your consumer
	$req = OAuthRequest::from_consumer_and_token($consumer, NULL, $method_type, $endpoint, $params);

	//sign your OAuth request using hmac_sha1
	$sig_method = new OAuthSignatureMethod_HMAC_SHA1();
	$req->sign_request($sig_method, $consumer, NULL);

	// create curl resource 
	$ch = curl_init(); 
	// set url 
	curl_setopt($ch, CURLOPT_URL, $req); 
	//return the transfer as a string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , FALSE);

	// set curl custom request type if not standard
	if ($method_type != "GET" && $method_type != "POST") {
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method_type);
	}

	if ($method_type == "POST" || $method_type == "PUT" || $method_type == "DELETE") {
	    $query_str = OAuthUtil::build_http_query($params);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:', 'Content-Length: ' . strlen($query_str)));
	    curl_setopt($ch, CURLOPT_POSTFIELDS,  $query_str);
	}

	// $output contains the output string 
	$json_output = curl_exec($ch);


	// close curl resource to free up system resources 
	curl_close($ch);


	return $json_output;
}