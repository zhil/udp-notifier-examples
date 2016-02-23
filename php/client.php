<?php
include "vendor/autoload.php";

$notifier = new Zhil\UdpNotifier\Notifier("localhost","1234","secret2");
$notifier->notification("test",["key"=>"value"]);