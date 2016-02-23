<?php
require_once "vendor/autoload.php";

$listener = new \Zhil\UdpNotifier\Listener("localhost","1234","secret");
$listener->run(function($message,$address) {
    echo 'client ' . $address . ': ' . $message . PHP_EOL;
});