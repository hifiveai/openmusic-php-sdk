<?php

class HFClearMemberSheetMusicRequest extends HFRequest
{
    private $sheetId;

    function __construct(){
        $this->clientId('')
            ->method('POST')
            ->param(array('sheetId'));
    }

    public function sheetId($sheetId){
        $this->sheetId = $sheetId;
        return $this;
    }

}