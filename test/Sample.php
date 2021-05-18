<?php

/*
 * 示例类
 */

class Sample {

    private $client;

    function __construct($url, $appId, $appSecret) {
        // 基础信息
        $profile = DefaultProfile::build($url, $appId, $appSecret);
        // 初始化client
        $this->client = new DefaultClient($profile);
    }

    public function baseLoginTest() {
        $request = new HFBaseLoginRequest();

        $request->clientId('sample-device')
            ->nickname('黄达')
            ->gender(GenderEnum::MALE)
            ->birthday('202012121')
            ->location('30.779164,103.94547')
            ->education(EducationEnum::MASTER)
            ->profession(8)
            ->isOrganization(true)
            ->favoriteSinger('周杰伦')
            ->favoriteGenre(1);

        $res = $this->client->getResponse($request);

        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
        // 用户登录后保存token
        $this->client->profile->token($res->data->token);
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
        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function sheetTagTest() {
        $request = new HFSheetTagRequest();

        $request->clientId('sample-device');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function searchMusicTest() {
        $request = new HFSearchMusicRequest();

        $request->clientId('sample-device')
            ->keyword('world')
            ->language(LangEnum::CN)
            ->priceFromCent(1)
            ->priceToCent(10000)
            ->tagIds('407,100')
            ->bpmFrom(1)
            ->bpmTo(300)
            ->durationFrom(1)
            ->durationTo(180)
            ->searchFiled(SearchFiledEnum::ALBUM_NAME)
            ->searchSmart(SearchSmartEnum::NO)
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function sheetMusicTest() {
        $request = new HFSheetMusicRequest();

        $request->clientId('sample-device')
            ->sheetId(1203)
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function hqlListenTest() {
        $request = new HFTrafficHQListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function hqlListenSliceTest() {
        $request = new HFTrafficHQListenSliceRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate'])
            ->isMixed(true)
            ->auditionBegin(10)
            ->auditionEnd(20);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficTagTest() {
        $request = new HFTrafficTagRequest();

        $request->clientId('sample-device');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficTagSheetTest() {
        $request = new HFTrafficTagSheetRequest();

        $request->clientId('sample-device')
            // ->tagId(407)
            ->recoNum(3)
            ->language(LangEnum::CN)
            ->type(SheetTypeEnum::SYS);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficSearchMusicTest() {
        $request = new HFTrafficSearchMusicRequest();

        $request->clientId('sample-device')
            ->keyword('hello')
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficSheetMusicTest() {
        $request = new HFTrafficSheetMusicRequest();

        $request->clientId('sample-device')
            ->sheetId(1203)
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficListenTest() {
        $request = new HFTrafficListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficListenMixedTest() {
        $request = new HFTrafficListenMixedRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
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

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficGroupTest() {
        $request = new HFTrafficGroupRequest();

        $request->clientId('sample-device');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficGroupSheetTest() {
        $request = new HFTrafficGroupSheetRequest();

        $request->clientId('sample-device')
            ->groupId('csa0t86qv24')
            ->language(LangEnum::CN)
            ->recoNum(3)
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficDownloadTest() {
        $request = new HFTrafficDownloadRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderAuthorizationTest() {
        $request = new HFOrderAuthorizationRequest();

        $request->clientId('sample-device')
            ->companyName('嗨翻屋')
            ->projectName('小嗨')
            ->brand('HIFIVE音乐开放平台')
            ->period(PeriodEnum::THREE_YEARS)
            ->area(AreaEnum::_GLOBAL)
            ->orderIds('14345565691451');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderListenMixedTest() {
        $request = new HFOrderListenMixedRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderListenTest() {
        $request = new HFOrderListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
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

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderSheetMusicTest() {
        $request = new HFOrderSheetMusicRequest();

        $request->clientId('sample-device')
            ->sheetId(1203)
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderGroupTest() {
        $request = new HFOrderGroupRequest();

        $request->clientId('sample-device');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderGroupSheetTest() {
        $request = new HFOrderGroupSheetRequest();

        $request->clientId('sample-device')
            ->groupId('csa0t86qv24')
            ->language(LangEnum::CN)
            ->recoNum(3)
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderTagSheetTest() {
        $request = new HFOrderTagSheetRequest();

        $request->clientId('sample-device')
            // ->tagId(5440)
            ->recoNum(3)
            ->language(LangEnum::CN)
            ->type(SheetTypeEnum::CUSTOM);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderRefundTest() {
        $request = new HFOrderRefundRequest();

        $request->clientId('sample-device')
            ->orderId('1434556569145');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderDetailTest() {
        $request = new HFOrderDetailRequest();

        $request->clientId('sample-device')
            ->orderId('1434556569145');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderPublishTest() {
        $request = new HFOrderPublishRequest();

        $request->clientId('sample-device')
            ->orderId('1434556569145')
            ->workId('uEC00xeWbExGNilHpSN7MoM3AalWqwUp1');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderMusicTest() {
        $request = new HFOrderMusicRequest();

        $request->clientId('sample-device')
            ->orderId(time())
            ->workId('uEC00xeWbExGNilHpSN7MoM3AalWqwUp1')
            ->subject('awsl')
            ->music('[{"versionId":"B7B810AABADF","price":20,"num":1}]')
            ->totalFee(1556)
            ->deadline(50)
            ->language(LangEnum::CN)
            ->audioFormat(AudioFormatEnum::MP3_128['ext'])
            ->audioRate(AudioFormatEnum::MP3_128['rate']);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function baseFavoriteTest() {
        $request = new HFBaseFavoriteRequest();

        $request->clientId('sample-device')
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function baseReportTest() {
        $request = new HFBaseReportRequest();

        $request->clientId('sample-device')
            ->targetId('B75C80A41E3A')
            ->action(1009);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function baseHotTest() {
        $request = new HFBaseHotRequest();

        $request->clientId('sample-device')
            ->startTime(1594639058)
            ->duration(180)
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function baseWeatherTest() {
        $request = new HFBaseWeatherRequest();

        $request->clientId('sample-device')
            ->location('30.779164,103.94547');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function baseVisualTest() {
        $request = new HFBaseVisualRequest();

        $request->clientId('sample-device')
            ->location('30.779164,103.94547');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function musicConfigTest() {
        $request = new HFMusicConfigRequest();

        $request->clientId('sample-device');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function channelTest() {
        $request = new HFChannelRequest();

        $request->clientId('sample-device');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function channelSheetTest() {
        $request = new HFChannelSheetRequest();

        $request->clientId('sample-device')
            ->groupId('csa0t86qv24')
            ->recoNum(3)
            ->language(LangEnum::CN)
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trialTest() {
        $request = new HFTrialRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficTrialTest(){
        $request = new HFTrafficTrialRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function UGCTrialTest(){
        $request = new HFUGCTrialRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function UGCHQListenTest(){
        $request = new HFUGCHQListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::AAC_320['ext'])
            ->audioRate(AudioFormatEnum::AAC_320['rate']);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function KTrialTest(){
        $request = new HFKTrialRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function KHQListenTest(){
        $request = new HFKHQListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->audioFormat(AudioFormatEnum::AAC_320['ext'])
            ->audioRate(AudioFormatEnum::AAC_320['rate']);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function trafficReportListenTest(){
        $request = new HFTrafficReportListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->duration(187)
            ->audioFormat(AudioFormatEnum::AAC_320['ext'])
            ->audioRate(AudioFormatEnum::AAC_320['rate'])
            ->timestamp(1618214602000);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function UGCReportListenTest(){
        $request = new HFUGCReportListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->duration(187)
            ->audioFormat(AudioFormatEnum::AAC_320['ext'])
            ->audioRate(AudioFormatEnum::AAC_320['rate'])
            ->timestamp(1618214602000);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function KReportListenTest(){
        $request = new HFKReportListenRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF')
            ->duration(187)
            ->audioFormat(AudioFormatEnum::AAC_320['ext'])
            ->audioRate(AudioFormatEnum::AAC_320['rate'])
            ->timestamp(1618214602000);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function orderTrialRequest(){
        $request = new HFOrderTrialRequest();

        $request->clientId('sample-device')
            ->musicId('B7B810AABADF');

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }
    }

    public function authorizeMusic(){
        $request = new HFAuthorizeMusicRequest();

        $request->clientId('sample-device')
            ->page(1)
            ->pageSize(10);

        $res = $this->client->getResponse($request);
        if (10200 != $res->code) {
            echo $request->getActionName(), ' ', $res->code, ' ', $res->msg, '<br/>';
        }

    }
}