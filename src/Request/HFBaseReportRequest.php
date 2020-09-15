<?php

class HFBaseReportRequest extends HFRequest {

    public $targetId;
    public $action;
    public $location;
    public $context;

    function __construct() {
        $this->method('POST')
            ->actionName('BaseReport')
            ->param(array('targetId', 'action', 'location',
                'context'));
    }

    public function targetId($targetId) {
        $this->targetId = $targetId;
        return $this;
    }

    public function action($action) {
        $this->action = $action;
        return $this;
    }

    public function location($location) {
        $this->location = $location;
        return $this;
    }

    public function context($context) {
        $this->context = $context;
        return $this;
    }
}