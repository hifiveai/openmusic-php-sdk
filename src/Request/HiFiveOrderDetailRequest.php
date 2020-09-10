<?php

class HiFiveOrderDetailRequest extends HiFiveRequest {

    public $orderId;

    function __construct() {
        $this->actionName('OrderDetail')
            ->param(array('orderId'));
    }

    public function orderId($orderId) {
        $this->orderId = $orderId;
        return $this;
    }
}