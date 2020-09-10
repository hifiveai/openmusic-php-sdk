<?php

class HiFiveBaseVisualRequest extends HiFiveRequest {

    public $location;

    function __construct() {
        $this->actionName('BaseVisual')
            ->param(array('location'));
    }

    public function location($location) {
        $this->location = $location;
        return $this;
    }
}