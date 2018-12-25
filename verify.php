<?php
$access_token = 'cZeyyqmrjKEi1gWN6pUlPPpZTvTfS8PSmocdnOwaZYbcnn6yFsSdKpGqRAJvy8qYg2YxNTPN1R/89DmRzcpdLRbO9Y3TptL99fuxg0kv4LAaGK9kIKoj00Xu+gJyQPZhW75SsXtunyedT8ZURD4JoQdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
?>
