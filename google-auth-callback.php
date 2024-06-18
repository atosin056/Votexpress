<?php
require_once 'vendor/autoload.php'; // Include Google API Client Library

// Initialize the Google client
$client = new Google_Client();
$client->setClientId('15704434400-5fa72eod41vguvv881iiqnaco69jmnkt.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/votexpress/google-auth-callback.php'); // Replace with your actual callback URL

// Get OAuth token
$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

// Get user info
$client->setAccessToken($token['access_token']);
$oauth2 = new Google_Service_Oauth2($client);
$userInfo = $oauth2->userinfo->get();

// Now you have the user info, you can use it to log in or register the user
// For example, you can print the user info
echo '<pre>';
print_r($userInfo);
echo '</pre>';
?>
