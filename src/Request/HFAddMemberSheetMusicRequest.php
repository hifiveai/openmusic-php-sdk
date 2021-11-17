<?php

class HFAddMemberSheetMusicRequest extends HFRequest
{
    public $sheetId;
    public $musicId;
    public $timestamp;
    public $accessToken;

    function __construct(){
        $this->actionName('AddMemberSheetMusic')
            ->method('POST')
            ->param(array('sheetId', 'musicId', 'timestamp', 'accessToken'));
    }

    public function sheetId($sheetId){
        $this->sheetId = $sheetId;
        return $this;
    }

    public function musicId($musicId){
        $this->musicId = $musicId;
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