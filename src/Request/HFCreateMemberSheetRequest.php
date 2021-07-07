<?php

class HFCreateMemberSheetRequest extends HFRequest
{
    public $sheetName;
    public $timestamp;
    public $accessToken;

    function __construct(){
        $this->actionName('CreateMemberSheet')
            ->method('POST')
            ->param(array('sheetName', 'timestamp', 'accessToken'));
    }

    public function sheetName($sheetName){
        $this->sheetName = $sheetName;
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