<?php // callback.php

//require "vendor/autoload.php";
//require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
date_default_timezone_set("Asia/Bangkok");
$timestamp = str(date("d/m/Y h:i:s"));
$date = str(date("d/m/Y"));
$time = str(date("h:i:s"));
//function get_username($u_id,$a_token)
//{
//	$header = array('Content-Type: application/json', 'Authorization: Bearer ' . $a_token);
//	$url1 = 'https://api.line.me/v2/bot/profile/'.$u_id;
//	$ch1 = curl_init($url1);
//	curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");
//	curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
//	curl_setopt($ch1, CURLOPT_HTTPHEADER, $header);
//	curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);			
//	$response = curl_exec($ch1);			
//	$events2 = json_decode($response, true);
//	$username = $events2['displayName'];
//	curl_close($ch1);
 //   	return $username;
//}
//function message_reply($u_id,$a_token,$rp_token,$ms)
//{
//	$header = array('Content-Type: application/json', 'Authorization: Bearer ' . $a_token);
//	// Build message to reply back
//	$message = [
//		'type' => 'text',
//		'text' => $ms
//	];
			
	// Make a POST Request to Messaging API to reply to sender
//	$url2 = 'https://api.line.me/v2/bot/message/reply';
//	$data2 = [
//		'replyToken' => $rp_token,
//		'messages' => [$message],
//		];
//		$post2 = json_encode($data2);
//		$ch2 = curl_init($url2);
//		curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");
//		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
//		curl_setopt($ch2, CURLOPT_POSTFIELDS, $post2);
//		curl_setopt($ch2, CURLOPT_HTTPHEADER, $header);
//		curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
//		$result = curl_exec($ch2);
//		curl_close($ch2);
//}
//$access_token = 'cZeyyqmrjKEi1gWN6pUlPPpZTvTfS8PSmocdnOwaZYbcnn6yFsSdKpGqRAJvy8qYg2YxNTPN1R/89DmRzcpdLRbO9Y3TptL99fuxg0kv4LAaGK9kIKoj00Xu+gJyQPZhW75SsXtunyedT8ZURD4JoQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
//$content = file_get_contents('php://input');
// Parse JSON
//$events = json_decode($content, true);
// Validate parsed JSON data
//if (!is_null($events['events'])) {
	// Loop through each event
//	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
//		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
//			$userid = $event['source']['userId'];
//			$username = get_username($userid,$access_token);			
			
			// Get replyToken
//			$replyToken = $event['replyToken'];
//			$_msg = $event['message']['text'];
//			if(strpos($_msg, 'TAMS')!== false||strpos($_msg, 'Tams')!== false||strpos($_msg, 'tams')!== false){
//				if(strpos($_msg, 'สวัสดี') !== false){
//					$text = "สวัสดี ".$username;	
//					message_reply($userid,$access_token,$replyToken,$text);
//				}else if(strpos($_msg, 'ทำงานนอกสถานที่') !== false){
//					$text = "บันทึกเรียบร้อยแล้ว @".$username;	
//					message_reply($userid,$access_token,$replyToken,$text);
//				}else if(strpos($_msg, 'ลาป่วย') !== false){
//					$text = "บันทึกเรียบร้อยแล้ว @".$username;		
//					message_reply($userid,$access_token,$replyToken,$text);
//				}else if(strpos($_msg, 'ลากิจ') !== false){
//					$text = "บันทึกเรียบร้อยแล้ว @".$username;		
//					message_reply($userid,$access_token,$replyToken,$text);
//				}else if(strpos($_msg, 'ลาพักร้อน') !== false){
//					$text = "บันทึกเรียบร้อยแล้ว @".$username;	
//					message_reply($userid,$access_token,$replyToken,$text);
//				}else{
//					$text = "You is ".$username." UserId:".$userid;	
//					message_reply($userid,$access_token,$replyToken,$text);
//				}
//			}
//		}
//	}
//}
echo "OK";

?>
