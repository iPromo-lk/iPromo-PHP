<?php

$gatewayType = "1";
//1 For Economy Gateway
//2 For Premium Gateway
$senderId = "economy"; //Your Sender ID
//If you are using Economy Gateway, use "economy" as Sender Id
//To test Premium Gateway, You can use "Demo" as Sender Id
$counterCode = "94"; //Country Code
$mobileNumber = "767XXXXXX"; //Mobile Number Without 0
$message = "Test Message"; //Your Message

require __DIR__ . '/src/auth.php';
?>