<?php

$path = dirname(__FILE__) . DIRECTORY_SEPARATOR;
include_once $path . 'Config.php';
include_once 'sampleTest.php';

$client = new Sample('https://hifive-openapi-qa.hifiveai.com', '5216d02806d5464b943492838b7e4390', '2d241e8f934d47d5');
$res = $client->authorizationTest();
print_r($res);