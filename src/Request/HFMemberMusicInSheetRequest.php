<?php

class HFMemberMusicInSheetRequest extends HFRequest
{
    public $sheetId;
    public $musicId;
    public $accessToken;

    function __construct(){
        $this->method('POST')
            ->actionName('MusicInSheet')
            ->param(array('sheetId', 'musicId','accessToken'));
    }

    public function sheetId($sheetId){
        $this->sheetId = $sheetId;
        return $this;
    }

    public function musicId($musicId){
        $this->musicId = $musicId;
        return $this;
    }

    public function accessToken($accessToken){
        $this->accessToken = $accessToken;
        return $this;
    }


}