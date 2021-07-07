<?php

class HFAddMemberSheetMusicRequest extends HFRequest
{
    private $sheetId;
    private $musicId;

    function __construct(){
        $this->actionName('AddMemberSheetMusic')
            ->method('POST')
            ->param(array('sheetId', 'musicId'));
    }

    public function sheetId($sheetId){
        $this->sheetId = $sheetId;
        return $this;
    }

    public function musicId($musicId){
        $this->musicId = $musicId;
        return $this;
    }
}