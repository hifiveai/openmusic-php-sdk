<?php

class HFDeleteMemberSheetRequest extends HFRequest
{
    private $sheetId;

    function __construct(){
        $this->actionName('DeleteMemberSheet')
            ->method('POST')
            ->param(array('sheetId'));
    }

    public function sheetId($sheetId){
        $this->sheetId = $sheetId;
        return $this;
    }

}