<?php

// The key should not get version controlled, so we stick it below the 
// document root and include it here.
include $_SERVER['DOCUMENT_ROOT'] . '/../keys/twitch_api.php'; 

// Setting up CORS header.
header("Access-Control-Allow-Origin: *");

$channel_id = $_GET["channel_id"];
$api_base = 'https://api.twitch.tv/kraken/streams/';

// Setup curl
$ch = curl_init($api_base . $channel_id);

// Add the api key to the header
$request_headers = ['Client-ID: ' . $api_key];
curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);

// Return the response as a string into $output
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch);

// We're done
curl_close($ch);
echo $output;
