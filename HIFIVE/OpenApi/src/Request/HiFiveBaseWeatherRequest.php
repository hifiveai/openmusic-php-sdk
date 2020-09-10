<?php

class HiFiveBaseWeatherRequest extends HiFiveRequest {

    public $location;

    function __construct() {
        $this->actionName('BaseWeather')
            ->param(array('location'));
    }

    public function location($location) {
        $this->location = $location;
        return $this;
    }

}