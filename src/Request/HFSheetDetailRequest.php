<?php

class HFSheetDetailRequest extends HFRequest {

    public $sheetId;

    function __construct() {
        $this->method('POST')
            ->actionName('SheetDetail')
            ->param(array('sheetId'));
    }

    public function sheetId($sheetId) {
        $this->sheetId = $sheetId;
        return $this;
    }

}