<?php

/*
 * 示例类
 */

$path = dirname(__FILE__) . DIRECTORY_SEPARATOR;
include_once $path . 'Config.php';

class Sample {

    private $client;

    function __construct() {
        // 基础信息
        $profile = DefaultProfile::build('https://hifive-openapi-qa.hifiveai.com', '5216d02806d5464b943492838b7e4390', '2d241e8f934d47d5');
        // 初始化client
        $this->client = new DefaultClient($profile);
    }

    public function tagTest() {
        // 构造请求体
        $request = new HFTrafficTagRequest();
        // 设置参数
        $request->clientId('sample-device');
        // 返回结果
        return $this->client->getResponse($request);
    }

    public function tagSheetTest() {
        // 构造请求体
        $request = new HFTrafficTagSheetRequest();
        // 设置参数
        $request->clientId('sample-device')
            ->recoNum(3);
        // 返回结果
        return $this->client->getResponse($request);
    }

    public function tagMusicTest() {
        $request = new HFTrafficTagMusicRequest();

        $request->clientId('sample-device')
            ->tagId(5440);

        return $this->client->getResponse($request);
    }

    public function searchMusicTest() {
        $request = new HFTrafficSearchMusicRequest();

        $request->clientId('sample-device')
            ->keyword('hello');

        return $this->client->getResponse($request);
    }

    public function sheetMusicTest() {
        $request = new HFTrafficSheetMusicRequest();

        $request->clientId('sample-device')
            ->sheetId(1203);

        return $this->client->getResponse($request);
    }

    public function listenTest() {
        $request = new HFTrafficListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(FileExtEnum::MP3)
            ->audioRate(BitRateEnum::BR_128);

        return $this->client->getResponse($request);
    }

    public function listenMixedTest() {
        $request = new HFTrafficListenMixedRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(FileExtEnum::MP3)
            ->audioRate(BitRateEnum::BR_128);

        return $this->client->getResponse($request);
    }

    public function listenSliceTest() {
        $request = new HFTrafficListenSliceRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(FileExtEnum::MP3)
            ->audioRate(BitRateEnum::BR_128)
            ->isMixed(true)
            ->auditionBegin(5)
            ->auditionEnd(10);

        return $this->client->getResponse($request);
    }

    public function groupTest() {
        $request = new HFTrafficGroupRequest();

        $request->clientId('sample-device');

        return $this->client->getResponse($request);
    }

    public function groupSheetTest() {
        $request = new HFTrafficGroupSheetRequest();

        $request->clientId('sample-device')
            ->groupId('csa0t86qv24')
            ->language(LangEnum::CN)
            ->recoNum(5)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function downloadTest() {
        $request = new HFTrafficDownloadRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(FileExtEnum::MP3)
            ->audioRate(BitRateEnum::BR_128);

        return $this->client->getResponse($request);
    }
}