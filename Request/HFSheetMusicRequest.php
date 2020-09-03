<?php

class HFSheetMusicRequest extends HFRequest {

    public $sheetId;
    public $language;
    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('SheetMusic')
            ->param(array('sheetId', 'language', 'page',
                'pageSize'));
    }

    public function sheetId($sheetId) {
        $this->sheetId = $sheetId;
        return $this;
    }

    public function language($language) {
        $this->language = $language;
        return $this;
    }

    public function page($page) {
        $this->page = $page;
        return $this;
    }

    public function pageSize($size) {
        $this->pageSize = $size;
        return $this;
    }
}