<?php

class HFOrderPublishRequest extends HFRequest {

    public $orderId;
    public $workId;

    function __construct() {
        $this->method('POST')
            ->actionName('OrderPublish')
            ->param(array('orderId', 'workId'));
    }

    public function orderId($orderId) {
        $this->orderId = $orderId;
        return $this;
    }

    public function workId($workId) {
        $this->workId = $workId;
        return $this;
    }
}