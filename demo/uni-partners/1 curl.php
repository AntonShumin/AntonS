<?php

error_reporting(E_ALL);
ini_set('display_rrors', 1);

/*
 * READ DATA
 */

//1 initialize curl
$ch = curl_init();

//2 set options, url to send request to
curl_setopt($ch, CURLOPT_URL, 'https://www.google.be');

//3 return opv output
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//4 return ipv output
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//5 include header in the output
curl_setopt($ch, CURLOPT_HEADER, 0);

$output = curl_exec($ch);

if ($output != false) {
    echo "cURL error: " . curl_error($ch);
}

//close
curl_close($ch);

print_r($output);


/*
 *  POST DATA
 */

$url = 'www..';
$post_data = array(

    'query' => 'stuff',
    'other' => 'other stuff'

);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

$outpout = curl_exec($ch);

if ($output != false) {
    echo "cURL error: " . curl_error($ch);
}

curl_close($ch);
print_r($output);


/*
 *  HTTPS
 */

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

/*
Failed: Error Number: 60. Reason: SSL certificate problem, verify that the CA cert is OK. Details:
error:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed
 */


//quickfix, disable ssl verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//normal fix met CURLOPT_CAINFO , refereren naar een certificaat
//http://unitstep.net/blog/2009/05/05/using-curl-in-php-to-access-https-ssltls-protected-sites/
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_CAINFO, getcwd() . "/CAcerts/BuiltinObjectToken-EquifaxSecureCA.crt");

/* VERIFYHOST
    0: Don’t check the common name (CN) attribute
    1: Check that the common name attribute at least exists
    2: Check that the common name exists and that it matches the host name of the server
 */
