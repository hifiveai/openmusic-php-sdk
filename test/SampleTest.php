<?php
header('Content-Type: text/html; charset=utf-8');

include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '../src/Config.php';
include_once 'Sample.php';

$client = new Sample('https://hifive-openapi-qa.hifiveai.com', 'app_id', 'app_secret');
$method = get_class_methods($client);
foreach ($method as $map) {
    if ('__construct' == $map) {
        continue;
    }
    $client->$map();
    usleep(200);
}