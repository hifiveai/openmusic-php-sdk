<?php

class HFOrderAuthorizationRequest extends HFRequest {

    public $companyName;
    public $projectName;
    public $brand;
    public $period;
    public $area;
    public $orderIds;

    function __construct() {
        $this->actionName('OrderAuthorization')
            ->param(array('companyName', 'projectName', 'brand',
                'period', 'area', 'orderIds'));
    }

    public function companyName($companyName) {
        $this->companyName = $companyName;
        return $this;
    }

    public function projectName($projectName) {
        $this->projectName = $projectName;
        return $this;
    }

    public function brand($brand) {
        $this->brand = $brand;
        return $this;
    }

    public function period($period) {
        $this->period = $period;
        return $this;
    }

    public function area($area) {
        $this->area = $area;
        return $this;
    }

    public function orderIds($orderIds) {
        $this->orderIds = $orderIds;
        return $this;
    }
}