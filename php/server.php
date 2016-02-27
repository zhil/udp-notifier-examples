<?php
require_once "vendor/autoload.php";

$listener = new \Zhil\UdpNotifier\Listener("localhost","1234","secret");
$listener->run(function($message,$address) {
    if(substr($message,0,1) != "{") {
        // all messages are json_encoded. Probably, secret is not valid.
        echo 'Invalid secret? cant encode json'.PHP_EOL;
    }
    echo 'client '.$address.': '.$message.PHP_EOL;
});