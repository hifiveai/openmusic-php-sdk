<?php

class HFCreateMemberSheetRequest extends HFRequest
{
    private $sheetName;

    function __construct(){
        $this->actionName('CreateMemberSheet')
            ->method('POST')
            ->param(array('sheetName'));
    }

    public function sheetName($sheetName){
        $this->sheetName = $sheetName;
        return $this;
    }

}