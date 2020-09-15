<?php

class HFBaseHotRequest extends HFRequest {

    public $startTime;
    public $duration;
    public $page;
    public $pageSize;

    function __construct() {
        $this->actionName('BaseHot')
            ->param(array('startTime', 'duration', 'page',
                'pageSize'));
    }

    public function startTime($startTime) {
        $this->startTime = $startTime;
        return $this;
    }

    public function duration($duration) {
        $this->duration = $duration;
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