<?php
$channelid = '0123456789';
$msg = getToken();
$token = $_POST['token'];

	
$url = 'https://discordapp.com/api/v6/channels/'.$channelid.'/messages';
   
$request = array(
	'content' => $msg
);

$request = json_encode($request);
$ch = curl_init($url);
$options = array(
		CURLOPT_RETURNTRANSFER => true,         // return web page
		CURLOPT_HEADER         => false,        // don't return headers
		CURLOPT_FOLLOWLOCATION => false,         // follow redirects
	   // CURLOPT_ENCODING       => "utf-8",           // handle all encodings
		CURLOPT_AUTOREFERER    => true,         // set referer on redirect
		CURLOPT_CONNECTTIMEOUT => 20,          // timeout on connect
		CURLOPT_TIMEOUT        => 20,          // timeout on response
		CURLOPT_POST            => 1,            // i am sending post data
		CURLOPT_POSTFIELDS     => $request,    // this are my post vars
		CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
		CURLOPT_SSL_VERIFYPEER => false,        //
		CURLOPT_VERBOSE        => 1,
		CURLOPT_HTTPHEADER     => array(
			"Authorization: $token"
		)

);

curl_setopt_array($ch,$options);
$data = curl_exec($ch);
$curl_errno = curl_errno($ch);
$curl_error = curl_error($ch);
//echo $curl_errno;
//echo $curl_error;
curl_close($ch);

function crypto_rand_secure($min, $max)
{
	$range = $max - $min;
	if ($range < 1) return $min; // not so random...
	$log = ceil(log($range, 2));
	$bytes = (int)($log / 8) + 1; // length in bytes
	$bits = (int)$log + 1; // length in bits
	$filter = (int)(1 << $bits) - 1; // set all lower bits to 1
	do {
		$rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
		$rnd = $rnd & $filter; // discard irrelevant bits
	} while ($rnd >= $range);
	return $min + $rnd;
}

function getToken()
{
	$length = rand(5,20);
	$token = "";
	$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
	$codeAlphabet .= "0123456789";
	$codeAlphabet .= ":;$%?";
	$max = strlen($codeAlphabet) - 1;
	for ($i = 0; $i < $length; $i++) {
		$token .= $codeAlphabet[crypto_rand_secure(0, $max)];
	}
	return $token;
}
