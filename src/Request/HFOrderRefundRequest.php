<?php

class HFOrderRefundRequest extends HFRequest {

    public $orderId;

    function __construct() {
        $this->method('POST')
            ->actionName('OrderRefund')
            ->param(array('orderId'));
    }

    public function orderId($orderId) {
        $this->orderId = $orderId;
        return $this;
    }
}