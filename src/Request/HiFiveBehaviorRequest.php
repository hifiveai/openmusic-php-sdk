<?php

class HiFiveBehaviorRequest extends HiFiveRequest {

    public $targetId;
    public $action;

    function __construct() {
        $this->method('POST')
            ->actionName('BaseReport')
            ->param(array('targetId', 'action'));
    }

    public function targetId($targetId) {
        $this->targetId = $targetId;
        return $this;
    }

    public function action($action) {
        $this->action = $action;
        return $this;
    }
}