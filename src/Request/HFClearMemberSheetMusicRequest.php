<?php

class HFClearMemberSheetMusicRequest extends HFRequest
{
    public $sheetId;
    public $timestamp;
    public $accessToken;

    function __construct(){
        $this->clientId('ClearMemberSheetMusic')
            ->method('POST')
            ->param(array('sheetId', 'timestamp', 'accessToken'));
    }

    public function sheetId($sheetId){
        $this->sheetId = $sheetId;
        return $this;
    }

    public function timestamp($timestamp){
        $this->timestamp = $timestamp;
        return $this;
    }

    public function accessToken($accessToken){
        $this->accessToken = $accessToken;
        return $this;
    }

}