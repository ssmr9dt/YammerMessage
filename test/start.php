<?php

require __DIR__ . "/../vendor/autoload.php";

define("YAMMER_TOKEN", "###########");

$YammerMessage = new ssmr9dt\YammerMessage();

// Referer: https://developer.yammer.com/docs/messages-json-post
// 1. Message body
// 2. Group ID
// 3. Options e.g) Notifier
$ret = $YammerMessage->sendMessage("Hello, World.", 11111, ["cc" => ["ssmr9dt@gmail.com"]]);

echo $ret ? "Success" : "Fail";