<?php

$botToken = "304045275:AAGreyX5a8PJk4jbMOtXHhFWAXjPRa8tcws";
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents("php://input");
print_r($update);
$updateArray = json_decode($update, TRUE);
$texto = $updateArray["result"][0]["message"]["text"];
$chatId = $updateArray["result"][0]["message"]["chat"]["id"];
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=chupas");


//$a = 'How are you?';

//if (strpos($a, 'are') !== false) {
//    echo 'true';
//}


?>
