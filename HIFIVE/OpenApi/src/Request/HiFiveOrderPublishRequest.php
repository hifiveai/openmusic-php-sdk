<?php

class HiFiveOrderPublishRequest extends HiFiveRequest {

    public $orderId;
    public $workId;

    function __construct() {
        $this->method('POST')
            ->actionName('TrafficHQListen')
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