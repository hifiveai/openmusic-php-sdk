<?php
header('Content-Type: text/html; charset=utf-8');

include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../src/Config.php';
include_once 'Sample.php';

$client = new Sample('https://gateway.open.hifiveai.com', '3faeec81030444e98acf6af9ba32752a', '59b1aff189b3474398');
$client->sheetTest();



//$method = get_class_methods($client);
//foreach ($method as $map) {
//    if ('__construct' == $map) {
//        continue;
//    }
//    $client->$map();
//    usleep(200);
//}