<?php
require_once 'vendor/autoload.php'; // Include Google API Client Library

// Initialize the Google client
$clientID = '15704434400-5fa72eod41vguvv881iiqnaco69jmnkt.apps.googleusercontent.com';

$clientSecret = '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';

$redirectUrl = 'http://localhost/votexpress/reg.php';


//Creating google client

$client = new Google_Client();

$client->setClientId($clientID);

$client->setClientSecret($clientSecret);

$client->setRedirectUri($redirectUrl);

$client->addScope('profile');

$client->addScope('email');


if (isset($_GET["code"])) {
	
	$token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

	$client->setAccessToken($token);


	$gauth = new Google_Service_Oauth2($client);

	$google_info = $gauth->userinfo->get();

	$email = $google_info->email;

	$name = $google_info->name;


	echo "Welcome ".$name." You are Registered using Nifemi: ".$email;

}

else{

	echo "<a href='".$client->createAuthUrl()."'> Login with Google</a>";

}


?>
