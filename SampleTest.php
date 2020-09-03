<?php

$path = dirname(__FILE__) . DIRECTORY_SEPARATOR;
include_once $path . 'Config.php';
include_once 'sampleTest.php';

$client = new Sample();
$res = $client->tagTest();
var_dump($res);