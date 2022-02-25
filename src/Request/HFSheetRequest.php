<?php

class HFSheetRequest extends HFRequest {

    public $recoNum;
    public $language;
    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('Sheet')
            ->param(array('recoNum', 'language',
                'page', 'pageSize'));
    }

    public function recoNum($recoNum) {
        $this->recoNum = $recoNum;
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