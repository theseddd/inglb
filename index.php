<?php
date_default_timezone_set("Asia/Bangkok");
$timestamp = strval(date("d/m/Y h:i:s"));
$date = strval(date("d/m/Y"));
$time = strval(date("h:i:s"));
$spreadsheetId = '1XJ7j_zMc-2tBKoEx0RAMnljCwdOfNacGQP8i2K-jM30';
$apikey = 'AIzaSyAgSEnkENLqDB2Udps_qKvXcv7HwRQUsrE';
$range_Y = strval(date("Y"));
$range_M = strval(date("m"));


//////////////////////////////////////////////////////////////////////////////////////
//$header = array('Content-Type: application/json');
//$url1 = 'https://sheets.googleapis.com/v4/spreadsheets/'.$spreadsheetId.'/values/'.$range_Y.'%2F'.$range_M.'12?valueRenderOption=FORMATTED_VALUE&key='.$spreadsheetId;
//$url1 = 'https://sheets.googleapis.com/v4/spreadsheets/'.$spreadsheetId.'/values/'.$range_Y.'%2F'.$range_M.'?valueRenderOption=FORMATTED_VALUE&key='.$apikey;
//$ch1 = curl_init($url1);
//curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch1, CURLOPT_HTTPHEADER, $header);
//curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);			
//$response = curl_exec($ch1);			
//$json_array = json_decode($response, true);
//$username = $events2['displayName'];
//curl_close($ch1);
//print_r(array_values($json_array));
//$elementCount  = count($json_array['values']);
///////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////
// Make a POST Request to Messaging API to reply to sender
//$url = 'https://sheets.googleapis.com/v4/spreadsheets/'.$spreadsheetId.'/values/'.$range_Y.'%2F'.$range_M.':append?valueInputOption=RAW&key='.$apikey;
//$url = 'https://sheets.googleapis.com/v4/spreadsheets/1XJ7j_zMc-2tBKoEx0RAMnljCwdOfNacGQP8i2K-jM30/values/2018%2F12:append?valueInputOption=RAW&key=AIzaSyC98w8aGPh5ptWcBOf05JlIjU213LruF_I';
//create a new cURL resource
//$ch = curl_init($url);
//setup request to send json via POST
//$data = array(array('1','2','3'));
//$payload = json_encode(array());
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

//$result = curl_exec($ch);
//close cURL resource
//curl_close($ch);
//$json_array = json_decode($result, true);
///////////////////////////////////////////////////////////////////////////////////////
//print_r(array_values($json_array));
//echo "U".$elementCount;
//echo "DateTime".$timestamp;
//echo "Hello LINE BOT";

// รวมไฟล์ Autoloading Classes
require_once 'src/Google/autoload.php';
//define('SERVICE_EMAIL', 'wuttichai@innergylab.com');
//define('PATH_KEY12', 'client_secret_920015454676-eg9amjec1ibkillsp4puet1q27dic3gp.apps.googleusercontent.com.json');
//define('APPLICATION_NAME', 'bot');
//define('FILE_ID', '1XJ7j_zMc-2tBKoEx0RAMnljCwdOfNacGQP8i2K-jM30');
// สร้าง Service Drive
//$client = new Google_Client();
//$client->setApplicationName(APPLICATION_NAME);
//$service = new Google_Service_Drive($client);
// สร้างและกำหนด Authentication Assertion Credentials ให้กับ Client
//$key = file_get_contents(PATH_KEY12);
//$cred = new Google_Auth_AssertionCredentials(SERVICE_EMAIL, array('https://www.googleapis.com/auth/drive', 'https://spreadsheets.google.com/feeds'), $key);
//$client->setAssertionCredentials($cred);
//if ($client->getAuth()->isAccessTokenExpired()) {
//$client->getAuth()->refreshTokenWithAssertion($cred);
//}
// เก็บค่า Access token ไว้ใช้กับ Sheet API
//$resultArray = json_decode($_SESSION['service_token']);
//$accessToken = $resultArray->access_token;

