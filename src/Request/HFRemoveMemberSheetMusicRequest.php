<?php

class HFRemoveMemberSheetMusicRequest extends HFRequest
{
    private $sheetId;
    private $musicId;

    function __construct(){
        $this->actionName('RemoveMemberSheetMusic')
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