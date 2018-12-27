<?php
date_default_timezone_set("Asia/Bangkok");
$timestamp = date("d/m/Y h:i:s");
$date = date("d/m/Y");
$time = date("h:i:s");
$spreadsheetId = "1XJ7j_zMc-2tBKoEx0RAMnljCwdOfNacGQP8i2K-jM30";
$range_Y = date("Y");
$range_M = date("m");

$header = array('Content-Type: application/json');
$url1 = 'https://sheets.googleapis.com/v4/spreadsheets/1XJ7j_zMc-2tBKoEx0RAMnljCwdOfNacGQP8i2K-jM30/values/'.$range_Y.'%2F'.$range_M.'12?key='.$spreadsheetId;
$ch1 = curl_init($url1);
curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);			
$response = curl_exec($ch1);			
$json_array = json_decode($response, true);
$username = $events2['displayName'];
curl_close($ch1);

$elementCount  = count($json_array);



echo "U".$elementCount;
echo "DateTime".$timestamp;
echo "Hello LINE BOT";
