<?php

$botToken = "304045275:AAGreyX5a8PJk4jbMOtXHhFWAXjPRa8tcws";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

print_r($update);


//$a = 'How are you?';

//if (strpos($a, 'are') !== false) {
//    echo 'true';
//}


?>
