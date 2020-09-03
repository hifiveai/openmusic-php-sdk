<?php

/*
 * 示例
 */

$path = dirname(__FILE__) . DIRECTORY_SEPARATOR;
include_once $path . 'Config.php';

// 基础信息
$profile = DefaultProfile::build('https://hifive-openapi-qa.hifiveai.com', '5216d02806d5464b943492838b7e4390', '2d241e8f934d47d5');
// 初始化client
$client = new DefaultClient($profile);
// 构造请求体
$request = new HFTrafficDownloadRequest();
$request->clientId('ios')
    ->musicId('B7B810AABADF')
    ->audioFormat('mp3')
    ->audioRate('128');
// 返回结果
$res = $client->getResponse($request);
var_dump($res);