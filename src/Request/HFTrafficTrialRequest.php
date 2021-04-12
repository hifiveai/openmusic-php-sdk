<?php

class HFTrafficTrialRequest extends HFRequest
{
    public $musicId;

    function __construct()
    {
        $this->method('GET')
            ->actionName('TrafficTrial')
            ->param(array('musicId'));
    }

    public function musicId($musicId){
        $this->musicId = $musicId;
        return $this;
    }
}