<?php

use BlueCity\UrSdk\UserRelationship;

include_once(__DIR__ . '/vendor/autoload.php');

$host = "10.9.84.4:9998";
$token = "token";
$timeout = 4;
$service = "Users-Relationships";

$ursdk = new UserRelationship([
  "host" => $host,
  "token" => $token,
  "timeout" => $timeout,
  "service" => $service,
]);

$ursdk->GetUsersCount(9527);

echo "Test is ok!";
