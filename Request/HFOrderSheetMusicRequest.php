<?php

class HFOrderSheetMusicRequest extends HFRequest {

    public $sheetId;
    public $language;
    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('OrderSheetMusic')
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

    public function pageSize($pageSize) {
        $this->pageSize = $pageSize;
        return $this;
    }
}