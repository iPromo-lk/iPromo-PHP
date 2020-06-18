<?php
$userName = "Hathsha"; //Your Username
$apiKey = "3d2262901c77b5b88f3d"; //Your API Key

$data = array(
	"user_name" => $userName,
	"api_key" => $apiKey,
	"gateway_type" => $gatewayType,
	"sender_id" => $senderId,
	"country_code" => $counterCode,
	"number" => $mobileNumber,
	"message" => $message
);
$data_string = json_encode($data);

$ch = curl_init('https://my.ipromo.lk/getapirequest/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>