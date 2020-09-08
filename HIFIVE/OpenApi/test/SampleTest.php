<?php
header('Content-Type: text/html; charset=utf-8');

include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../src/Config.php';
include_once 'Sample.php';

$client = new Sample('https://hifive-openapi-qa.hifiveai.com', '5216d02806d5464b943492838b7e4390', '2d241e8f934d47d5');
$res = $client->hqlListenTest();
print_r($res);