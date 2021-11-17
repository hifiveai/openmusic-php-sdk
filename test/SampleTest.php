<?php
header('Content-Type: text/html; charset=utf-8');

include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../src/Config.php';
include_once 'Sample.php';

$client = new Sample('', '', '');
$client->UGCHQListenTest();
//$client->professionalHotTest();
//$client->professionalNewTest();


//$method = get_class_methods($client);
//foreach ($method as $map) {
//    if ('__construct' == $map) {
//        continue;
//    }
//    $client->$map();
//    usleep(200);
//}