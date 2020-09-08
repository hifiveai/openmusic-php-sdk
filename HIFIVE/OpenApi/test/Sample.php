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
            ->recoNum(3);
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
        $request = new HFHQListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        return $this->client->getResponse($request);
    }

    public function hqlListenSliceTest() {
        $request = new HFHQListenSliceRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate'])
            ->isMixed(true)
            ->auditionBegin(10)
            ->auditionEnd(20);

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
            ->recoNum(3)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function trafficDownloadTest() {
        $request = new HFTrafficDownloadRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        return $this->client->getResponse($request);
    }

    public function authorizationTest() {
        $request = new HFAuthorizationRequest();

        $request->clientId('sample-device')
            ->companyName('嗨翻屋')
            ->projectName('小嗨')
            ->brand('HIFIVE音乐开放平台')
            ->period(PeriodEnum::THREE_YEARS)
            ->area(AreaEnum::_GLOBAL)
            ->orderIds('14345565691451');

        return $this->client->getResponse($request);
    }

    public function orderSearchMusicTest() {
        $request = new HFOrderSearchMusicRequest();

        $request->clientId('sample-device')
            ->keyword('world')
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function orderListenMixedTest() {
        $request = new HFOrderListenMixedRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        return $this->client->getResponse($request);
    }

    public function orderListenTest() {
        $request = new HFOrderListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        return $this->client->getResponse($request);
    }

    public function orderListenSliceTest() {
        $request = new HFOrderListenSliceRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate'])
            ->isMixed(true)
            ->auditionBegin(0)
            ->auditionEnd(100);

        return $this->client->getResponse($request);
    }

    public function orderSheetMusicTest() {
        $request = new HFOrderSheetMusicRequest();

        $request->clientId('sample-device')
            ->sheetId(1203)
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function orderGroupTest() {
        $request = new HFOrderGroupRequest();

        $request->clientId('sample-device');

        return $this->client->getResponse($request);
    }

    public function orderGroupSheetTest() {
        $request = new HFOrderGroupSheetRequest();

        $request->clientId('sample-device')
            ->groupId('csa0t86qv24')
            ->language(LangEnum::CN)
            ->recoNum(3)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function orderTagSheetTest() {
        $request = new HFOrderTagSheetRequest();

        $request->clientId('sample-device')
            // ->tagId(5440)
            ->recoNum(3)
            ->language(LangEnum::CN)
            ->type(SheetTypeEnum::CUSTOM);

        return $this->client->getResponse($request);
    }

    public function orderRefundTest() {
        $request = new HFOrderRefundRequest();

        $request->clientId('sample-device')
            ->orderId('1434556569145');

        return $this->client->getResponse($request);
    }

    public function orderDetailTest() {
        $request = new HFOrderDetailRequest();

        $request->clientId('sample-device')
            ->orderId('1434556569145');

        return $this->client->getResponse($request);
    }

    public function orderPublishTest() {
        $request = new HFOrderPublishRequest();

        $request->clientId('sample-device')
            ->orderId('1434556569145')
            ->workId('uEC00xeWbExGNilHpSN7MoM3AalWqwUp1');

        return $this->client->getResponse($request);
    }

    public function orderMusicTest() {
        $request = new HFOrderMusicRequest();

        $request->clientId('sample-device')
            ->orderId('1434556569145')
            ->workId('uEC00xeWbExGNilHpSN7MoM3AalWqwUp1')
            ->subject('awsl')
            ->music('[{"versionId":"B7B810AABADF","price":20,"num":1}]')
            ->totalFee(1556)
            ->deadline(50)
            ->language(LangEnum::CN)
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        return $this->client->getResponse($request);
    }

    public function orderTagMusicTest() {
        $request = new HFOrderTagMusicRequest();

        $request->clientId('sample-device')
            // ->tagId(5440)
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function userGetTest() {
        $request = new HFUserGetRequest();

        $request->clientId('sample-device')
            ->nickname('zealot')
            ->gender(GenderEnum::MALE)
            ->birthday('19900818')
            ->location('30.779164,103.94547')
            ->education(EducationEnum::UNDERGRADUATE)
            ->profession('私企员工')
            ->isOrganization(true)
            ->favoriteSinger('周杰伦')
            ->favoriteGenre('流行');

        return $this->client->getResponse($request);
    }

    public function baseFavoriteTest() {
        $request = new HFBaseFavoriteRequest();

        $request->clientId('sample-device')
            ->page(1)
            ->pageSize(10);

        // 设置用户标识 或者 在初始化client时设置
        // $this->client->profile->token('5a9a8a7b7a6c34b6cabbbace77808b67');

        return $this->client->getResponse($request);
    }

    public function behaviorTest() {
        $request = new HFBehaviorRequest();

        $request->clientId('sample-device')
            ->targetId('B75C80A41E3A')
            ->action(1009);

        // $this->client->profile->token('5a9a8a7b7a6c34b6cabbbace77808b67');

        return $this->client->getResponse($request);
    }

    public function hotTest() {
        $request = new HFHotRequest();

        $request->clientId('sample-device')
            ->startTime(1594639058)
            ->duration(180)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

    public function baseWeatherTest() {
        $request = new HFBaseWeatherRequest();

        $request->clientId('sample-device')
            ->location('30.779164,103.94547');

        return $this->client->getResponse($request);
    }

    public function baseVisualTest() {
        $request = new HFBaseVisualRequest();

        $request->clientId('sample-device')
            ->location('30.779164,103.94547');

        return $this->client->getResponse($request);
    }

    public function musicConfigTest() {
        $request = new HFMusicConfigRequest();

        $request->clientId('sample-device');

        return $this->client->getResponse($request);
    }

    public function channelTest() {
        $request = new HFChannelRequest();

        $request->clientId('sample-device');

        return $this->client->getResponse($request);
    }

    public function channelSheetTest() {
        $request = new HFChannelSheetRequest();

        $request->clientId('sample-device')
            ->groupId('csa0t86qv24')
            ->recoNum(3)
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        return $this->client->getResponse($request);
    }

}