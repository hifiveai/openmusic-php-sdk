<?php

/*
 * 示例类
 */

class Sample {

    private $client;

    function __construct($url, $appId, $appSecret) {
        // 基础信息
        $profile = DefaultProfile::build($url, $appId, $appSecret);
        // 如果需要，设置用户身份识别token
        // $profile = DefaultProfile::build($url, $appId, $appSecret, $userToken);
        // 初始化client
        $this->client = new DefaultClient($profile);
    }

    public function tagSheetTest() {
        // 构造请求体
        $request = new HFTagSheetRequest();
        // 设置参数
        $request->clientId('sample-device')
            // ->tagId(407)
            ->type(SheetTypeEnum::SYS)
            ->language(LangEnum::CN)
            ->recoNum(5);
        // 返回结果
        return $this->client->getResponse($request);
    }

    public function sheetTagTest() {
        $request = new HFSheetTagRequest();

        $request->clientId('sample-device');

        return $this->client->getResponse($request);
    }

    public function searchMusicTest() {
        $request = new HFSearchMusicRequest();

        $request->clientId('sample-device')
            ->keyword('world')
            ->language(LangEnum::CN)
            ->price('1-10000')
            // ->tagId(407)
            ->bpm('1-300')
            ->duration('1-180')
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function sheetMusicTest() {
        $request = new HFSheetMusicRequest();

        $request->clientId('sample-device')
            ->sheetId(1203)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function hqlListenTest() {
        $request = new HFSheetMusicRequest();

        $request->clientId('sample-device')
            ->sheetId(1203)
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function hqlListenSliceTest() {
        $request = new HFSheetMusicRequest();

        $request->clientId('sample-device')
            ->sheetId(1203)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function trafficTagTest() {
        $request = new HFTrafficTagRequest();

        $request->clientId('sample-device');

        return $this->client->getResponse($request);
    }

    public function trafficTagSheetTest() {
        $request = new HFTrafficTagSheetRequest();

        $request->clientId('sample-device')
            // ->tagId(407)
            ->recoNum(3)
            ->language(LangEnum::CN)
            ->type(SheetTypeEnum::SYS);

        return $this->client->getResponse($request);
    }

    public function trafficTagMusicTest() {
        $request = new HFTrafficTagMusicRequest();

        $request->clientId('sample-device')
            // ->tagId(5440)
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function trafficSearchMusicTest() {
        $request = new HFTrafficSearchMusicRequest();

        $request->clientId('sample-device')
            ->keyword('hello')
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function trafficSheetMusicTest() {
        $request = new HFTrafficSheetMusicRequest();

        $request->clientId('sample-device')
            ->sheetId(1203)
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function trafficListenTest() {
        $request = new HFTrafficListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        return $this->client->getResponse($request);
    }

    public function trafficListenMixedTest() {
        $request = new HFTrafficListenMixedRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        return $this->client->getResponse($request);
    }

    public function trafficListenSliceTest() {
        $request = new HFTrafficListenSliceRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate'])
            ->isMixed(true)
            ->auditionBegin(5)
            ->auditionEnd(10);

        return $this->client->getResponse($request);
    }

    public function trafficGroupTest() {
        $request = new HFTrafficGroupRequest();

        $request->clientId('sample-device');

        return $this->client->getResponse($request);
    }

    public function trafficGroupSheetTest() {
        $request = new HFTrafficGroupSheetRequest();

        $request->clientId('sample-device')
            ->groupId('csa0t86qv24')
            ->language(LangEnum::CN)
            ->recoNum(5)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function trafficDownloadTest() {
        $request = new HFTrafficDownloadRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['rate'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        return $this->client->getResponse($request);
    }
}