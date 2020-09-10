<?php
header('Content-Type: text/html; charset=utf-8');

include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../src/Config.php';
include_once 'Sample.php';

$client = new Sample('https://hifive-openapi-qa.hifiveai.com', 'your_app_id', 'your_app_secret');
$res = $client->hqlListenTest();
print_r($res);