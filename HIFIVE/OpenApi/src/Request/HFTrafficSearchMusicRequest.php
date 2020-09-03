<?php

class HFTrafficSearchMusicRequest extends HFRequest {

    public $language;
    public $keyword;
    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('TrafficSearchMusic')
            ->param(array('language', 'keyword', 'page',
                'pageSize'));
    }

    public function language($language) {
        $this->language = $language;
        return $this;
    }

    public function keyword($keyword) {
        $this->keyword = $keyword;
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