<?php

class HFDeleteMemberSheetRequest extends HFRequest
{
    public $sheetId;
    public $timestamp;
    public $accessToken;

    function __construct(){
        $this->actionName('DeleteMemberSheet')
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